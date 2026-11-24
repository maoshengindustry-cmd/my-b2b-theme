(function () {
  var mobileBtn = document.getElementById('b2b-mobile-toggle');
  var mobileDrawer = document.getElementById('b2b-mobile-drawer');

  if (mobileBtn && mobileDrawer) {
    mobileBtn.addEventListener('click', function () {
      var open = mobileDrawer.hidden;
      mobileDrawer.hidden = !open;
      mobileBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    mobileDrawer.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileDrawer.hidden = true;
        mobileBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Capabilities filter
  var capButtons = document.querySelectorAll('[data-cap-filter]');
  var capCards = document.querySelectorAll('[data-cap-group]');
  capButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = btn.getAttribute('data-cap-filter');
      capButtons.forEach(function (b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      capCards.forEach(function (card) {
        var group = card.getAttribute('data-cap-group');
        card.hidden = target !== 'all' && group !== target;
      });
    });
  });

  // Featured products filter
  var partButtons = document.querySelectorAll('[data-part-filter]');
  var partCards = document.querySelectorAll('[data-part-material]');
  partButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = btn.getAttribute('data-part-filter');
      partButtons.forEach(function (b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      partCards.forEach(function (card) {
        var mat = card.getAttribute('data-part-material');
        card.hidden = target !== 'all' && mat !== target;
      });
    });
  });

  // RFQ Modal
  var modal = document.getElementById('b2b-rfq-modal');
  var modalClose = document.getElementById('b2b-modal-close');
  var modalDone = document.getElementById('b2b-modal-done');
  var modalForm = document.getElementById('b2b-modal-form');
  var modalSuccess = document.getElementById('b2b-modal-success');
  var modalRef = document.getElementById('b2b-modal-ref');
  var modalError = document.getElementById('b2b-modal-error');

  function openModal(preset) {
    if (!modal) return;
    if (mobileDrawer) mobileDrawer.hidden = true;
    if (modalForm && modalSuccess) {
      modalForm.hidden = false;
      modalSuccess.hidden = true;
    }
    if (modalError) modalError.hidden = true;
    if (preset) {
      var procEl = document.getElementById('m-process');
      var matEl = document.getElementById('m-material');
      var tolEl = document.getElementById('m-tolerance');
      var notesEl = document.getElementById('m-notes');
      if (procEl && preset.process) procEl.value = preset.process;
      if (matEl && preset.material) matEl.value = preset.material;
      if (tolEl && preset.tolerance) tolEl.value = preset.tolerance;
      if (notesEl && preset.notes) notesEl.value = preset.notes;
    }
    modal.hidden = false;
  }

  function closeModal() {
    if (modal) modal.hidden = true;
  }

  document.querySelectorAll('[data-open-rfq]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      openModal({
        process: btn.getAttribute('data-process') || '',
        material: btn.getAttribute('data-material') || '',
        tolerance: btn.getAttribute('data-tolerance') || '',
        notes: btn.getAttribute('data-notes') || ''
      });
    });
  });

  if (modalClose) modalClose.addEventListener('click', closeModal);
  if (modalDone) modalDone.addEventListener('click', closeModal);
  if (modal) {
    modal.addEventListener('click', function (e) {
      if (e.target === modal) closeModal();
    });
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeModal();
      if (mobileDrawer) mobileDrawer.hidden = true;
    }
  });

  function wireRfqForm(form, errorEl, successEl, refEl) {
    if (!form) return;
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var fd = new FormData(form);
      var name = String(fd.get('name') || '').trim();
      var email = String(fd.get('email') || '').trim();
      var company = String(fd.get('company') || '').trim();

      if (!name) {
        errorEl.textContent = 'Please enter your full name.';
        errorEl.hidden = false;
        return;
      }
      if (!/^[^s@]+@[^s@]+.[^s@]+$/.test(email)) {
        errorEl.textContent = 'Please enter a valid business email address.';
        errorEl.hidden = false;
        return;
      }
      if (!company) {
        errorEl.textContent = 'Please enter your company or organization name.';
        errorEl.hidden = false;
        return;
      }

      errorEl.hidden = true;
      var submitBtn = form.querySelector('button[type="submit"]');
      var originalLabel = submitBtn ? submitBtn.textContent : '';
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';
      }

      var showSuccess = function (refId) {
        if (refEl) refEl.textContent = refId;
        form.hidden = true;
        if (successEl) successEl.hidden = false;
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = originalLabel;
        }
      };

      if (window.b2bThemeData && window.b2bThemeData.ajaxUrl) {
        fd.append('action', 'b2b_rfq_submit');
        fd.append('nonce', window.b2bThemeData.nonce || '');
        fetch(window.b2bThemeData.ajaxUrl, { method: 'POST', body: fd })
          .then(function (r) { return r.json(); })
          .then(function (json) {
            if (json && json.success && json.data && json.data.refId) {
              showSuccess(json.data.refId);
            } else {
              errorEl.textContent = (json && json.data && json.data.message) || 'Submission error. Please email rfq@apexforge-cnc.com.';
              errorEl.hidden = false;
              if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = originalLabel;
              }
            }
          })
          .catch(function () {
            errorEl.textContent = 'Network error. Please email rfq@apexforge-cnc.com.';
            errorEl.hidden = false;
            if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.textContent = originalLabel;
            }
          });
      } else {
        var fallbackId = 'RFQ-' + new Date().getFullYear() + '-' + Math.floor(1000 + Math.random() * 9000);
        showSuccess(fallbackId);
      }
    });
  }

  wireRfqForm(modalForm, modalError, modalSuccess, modalRef);

  var inlineForm = document.getElementById('b2b-inline-form');
  var inlineError = document.getElementById('b2b-inline-error');
  var inlineSuccess = document.getElementById('b2b-inline-success');
  var inlineRef = document.getElementById('b2b-inline-ref');
  var inlineReset = document.getElementById('b2b-inline-reset');

  wireRfqForm(inlineForm, inlineError, inlineSuccess, inlineRef);
  if (inlineReset && inlineForm && inlineSuccess) {
    inlineReset.addEventListener('click', function () {
      inlineForm.reset();
      inlineForm.hidden = false;
      inlineSuccess.hidden = true;
    });
  }
})();
