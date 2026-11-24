<?php
/**
 * Theme Footer & Shared RFQ Modal
 *
 * @package My_B2B_Theme
 */
?>
<footer class="site-footer">
	<div class="container-b2b footer-inner">
		<div>
			<strong style="color:#ffffff;font-family:var(--font-display);">ApexForge Precision</strong>
			<span style="margin:0 8px;color:#475569;" aria-hidden="true">·</span>
			<span>ISO 9001:2015 Custom CNC Machining &amp; Rapid Prototyping</span>
		</div>
		<div class="footer-links">
			<a href="#capabilities">Capabilities</a>
			<a href="#products">Products</a>
			<a href="#quality">Quality</a>
			<a href="mailto:rfq@apexforge-cnc.com">rfq@apexforge-cnc.com</a>
			<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> ApexForge Precision</span>
		</div>
	</div>
</footer>

<div id="b2b-rfq-modal" class="rfq-modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="b2b-modal-title" hidden>
	<div class="rfq-modal-panel">
		<div class="rfq-card-head">
			<div>
				<h2 id="b2b-modal-title" class="font-display" style="font-size:1.25rem;font-weight:700;">Request a Custom CNC Quote</h2>
				<p style="margin-top:4px;font-size:0.75rem;color:#64748b;">Engineering DFM &amp; pricing reply within 1 business day.</p>
			</div>
			<button type="button" id="b2b-modal-close" class="modal-close-btn" aria-label="Close quote modal">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<line x1="18" y1="6" x2="6" y2="18"></line>
					<line x1="6" y1="6" x2="18" y2="18"></line>
				</svg>
			</button>
		</div>

		<div id="b2b-modal-success" class="rfq-success" role="status" hidden>
			<p style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.06em;color:#047857;">Request Received</p>
			<h3 class="font-display" style="margin-top:8px;font-size:1.25rem;font-weight:700;">Reference <span id="b2b-modal-ref" class="font-mono" style="color:#0369a1;"></span></h3>
			<p style="margin-top:8px;font-size:0.875rem;color:#475569;">Our engineering desk has received your specification and will reply within 24 hours.</p>
			<button type="button" id="b2b-modal-done" class="btn btn-primary" style="margin-top:20px;">Done</button>
		</div>

		<form id="b2b-modal-form" novalidate>
			<div class="form-grid-2">
				<div class="field-group">
					<label class="field-label" for="m-name">Full Name *</label>
					<input id="m-name" name="name" type="text" required class="field-control" placeholder="e.g. Michael Carter">
				</div>
				<div class="field-group">
					<label class="field-label" for="m-email">Business Email *</label>
					<input id="m-email" name="email" type="email" required class="field-control" placeholder="name@company.com">
				</div>
			</div>
			<div class="form-grid-2">
				<div class="field-group">
					<label class="field-label" for="m-company">Company *</label>
					<input id="m-company" name="company" type="text" required class="field-control" placeholder="Company & Country">
				</div>
				<div class="field-group">
					<label class="field-label" for="m-process">Process</label>
					<input id="m-process" name="process" type="text" class="field-control" value="5-Axis Milling">
				</div>
			</div>
			<div class="form-grid-2">
				<div class="field-group">
					<label class="field-label" for="m-material">Material</label>
					<input id="m-material" name="material" type="text" class="field-control" value="Aluminum 6061-T6 / 7075-T6">
				</div>
				<div class="field-group">
					<label class="field-label" for="m-tolerance">Tolerance</label>
					<input id="m-tolerance" name="tolerance" type="text" class="field-control" value="±0.005 mm (Precision)">
				</div>
			</div>
			<div class="field-group">
				<label class="field-label" for="m-notes">Part Notes / Quantity / Finish</label>
				<textarea id="m-notes" name="notes" rows="3" class="field-control" placeholder="Quantity, target lead time, surface finish, or CAD drawing link"></textarea>
			</div>
			<div id="b2b-modal-error" class="form-alert" role="alert" hidden></div>
			<button type="submit" class="btn btn-primary" style="width:100%;padding:12px 18px;">Send Quote Request</button>
		</form>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
