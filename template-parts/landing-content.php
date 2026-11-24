<?php
/**
 * Main Landing Page Content Template Part
 *
 * @package My_B2B_Theme
 */

$img_base = get_template_directory_uri() . '/assets/images';
?>
<main>
	<!-- SECTION 1: HERO -->
	<section id="home" class="hero-section">
		<div class="hero-bg">
			<img src="<?php echo esc_url( $img_base . '/hero-cnc.jpg' ); ?>" alt="5-axis CNC machining center cutting precision aerospace aluminum housing" referrerpolicy="no-referrer">
			<div class="hero-scrim" aria-hidden="true"></div>
		</div>

		<div class="container-b2b hero-content">
			<div class="hero-copy">
				<p class="hero-kicker">ISO 9001:2015 Certified · Tolerances down to ±0.005mm · 3-Day Rapid Prototyping</p>
				<h1 class="hero-title">High Precision Custom CNC Machining Services &amp; Rapid Prototyping</h1>
				<p class="hero-desc">
					Direct contract manufacturer serving North American and European OEM engineering teams. From single 5-axis prototypes to serialized multi-axis production runs with full CMM dimensional inspection.
				</p>
				<div class="hero-ctas">
					<button type="button" class="btn btn-primary-lg" data-open-rfq>
						<span>Get an Instant Quote</span>
						<span aria-hidden="true">→</span>
					</button>
					<a href="#capabilities" class="btn btn-ghost-light">Explore Capabilities</a>
				</div>
			</div>

			<div class="hero-metrics">
				<div>
					<div class="hero-metric-val">±0.005 mm</div>
					<div class="hero-metric-lbl">Tightest machining tolerance</div>
				</div>
				<div>
					<div class="hero-metric-val">3 Days</div>
					<div class="hero-metric-lbl">Rapid prototype turnaround</div>
				</div>
				<div>
					<div class="hero-metric-val">42+</div>
					<div class="hero-metric-lbl">5-Axis &amp; Swiss CNC centers</div>
				</div>
				<div>
					<div class="hero-metric-val">50+</div>
					<div class="hero-metric-lbl">Certified metals &amp; engineering plastics</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION 2: CORE CAPABILITIES -->
	<section id="capabilities" class="section-pad">
		<div class="container-b2b">
			<div class="section-head">
				<div>
					<p class="section-eyebrow">Core Capabilities</p>
					<h2 class="section-title">Multi-Axis Machining, Turning &amp; Certified Finishing</h2>
					<p class="section-lead">
						Integrated shop-floor capacity engineered to eliminate vendor handoffs and cut total lead times from CAD upload to inspected delivery.
					</p>
				</div>
				<div class="filter-bar" role="group" aria-label="Filter machining capabilities">
					<button type="button" class="filter-btn is-active" data-cap-filter="all">All Processes</button>
					<button type="button" class="filter-btn" data-cap-filter="machining">Milling &amp; Turning</button>
					<button type="button" class="filter-btn" data-cap-filter="fabrication">Sheet &amp; Finishing</button>
				</div>
			</div>

			<div class="grid-2">
				<article class="cap-card" data-cap-group="machining">
					<div>
						<div class="cap-top">
							<span class="cap-num">01.</span>
							<span class="cap-equip">DMG MORI &amp; Mazak Simultaneous 5-Axis Centers</span>
						</div>
						<h3 class="cap-title">5-Axis Milling</h3>
						<p class="cap-desc">Single-setup machining for compound angles, deep impellers, undercuts, and complex structural aerospace housings with zero datum shift.</p>
					</div>
					<div class="cap-specs">
						<dl class="spec-row-3">
							<div><dt>Tolerance</dt><dd class="font-mono">±0.005 mm</dd></div>
							<div><dt>Max Work Envelope</dt><dd class="font-mono">1,200 × 850 × 650 mm</dd></div>
							<div><dt>Standard Lead</dt><dd class="font-mono">3–5 Days</dd></div>
						</dl>
						<button type="button" class="text-action-btn" data-open-rfq data-process="5-Axis Milling">
							<span>Quote 5-Axis Milling</span><span aria-hidden="true">→</span>
						</button>
					</div>
				</article>

				<article class="cap-card" data-cap-group="machining">
					<div>
						<div class="cap-top">
							<span class="cap-num">02.</span>
							<span class="cap-equip">Citizen Swiss-Type &amp; Multi-Axis Mill-Turn Lathes</span>
						</div>
						<h3 class="cap-title">CNC Turning</h3>
						<p class="cap-desc">High-concentricity bar-fed production for precision shafts, valve spools, custom fasteners, and live-tooled cross-drilled couplings.</p>
					</div>
					<div class="cap-specs">
						<dl class="spec-row-3">
							<div><dt>Tolerance</dt><dd class="font-mono">±0.004 mm</dd></div>
							<div><dt>Max Work Envelope</dt><dd class="font-mono">Ø2 – Ø380 × 900 mm</dd></div>
							<div><dt>Standard Lead</dt><dd class="font-mono">3–5 Days</dd></div>
						</dl>
						<button type="button" class="text-action-btn" data-open-rfq data-process="CNC Turning">
							<span>Quote CNC Turning</span><span aria-hidden="true">→</span>
						</button>
					</div>
				</article>

				<article class="cap-card" data-cap-group="fabrication">
					<div>
						<div class="cap-top">
							<span class="cap-num">03.</span>
							<span class="cap-equip">Fiber Laser Cutting, CNC Turret Punch &amp; Press Brakes</span>
						</div>
						<h3 class="cap-title">Sheet Metal Fabrication</h3>
						<p class="cap-desc">Clean-edge enclosures, chassis assemblies, EMI shielding brackets, and precision TIG/laser welded industrial sub-assemblies.</p>
					</div>
					<div class="cap-specs">
						<dl class="spec-row-3">
							<div><dt>Tolerance</dt><dd class="font-mono">±0.050 mm</dd></div>
							<div><dt>Max Work Envelope</dt><dd class="font-mono">2,500 × 1,250 mm</dd></div>
							<div><dt>Standard Lead</dt><dd class="font-mono">5–7 Days</dd></div>
						</dl>
						<button type="button" class="text-action-btn" data-open-rfq data-process="Sheet Metal Fabrication">
							<span>Quote Sheet Metal Fabrication</span><span aria-hidden="true">→</span>
						</button>
					</div>
				</article>

				<article class="cap-card" data-cap-group="fabrication">
					<div>
						<div class="cap-top">
							<span class="cap-num">04.</span>
							<span class="cap-equip">In-House Bead Blast &amp; Qualified NADCAP Partner Lines</span>
						</div>
						<h3 class="cap-title">Surface Finishing</h3>
						<p class="cap-desc">MIL-A-8625 Type II/III anodizing, passivation per ASTM A967, electroless nickel plating, chromate conversion, and fiber laser part marking.</p>
					</div>
					<div class="cap-specs">
						<dl class="spec-row-3">
							<div><dt>Surface Roughness</dt><dd class="font-mono">Ra 0.2 µm</dd></div>
							<div><dt>Processing</dt><dd class="font-mono">Batch &amp; Rack Lines</dd></div>
							<div><dt>Added Lead</dt><dd class="font-mono">+1–2 Days</dd></div>
						</dl>
						<button type="button" class="text-action-btn" data-open-rfq data-process="Surface Finishing">
							<span>Quote Surface Finishing</span><span aria-hidden="true">→</span>
						</button>
					</div>
				</article>
			</div>
		</div>
	</section>

	<!-- SECTION 3: FEATURED PRODUCTS -->
	<section id="products" class="section-pad section-mist">
		<div class="container-b2b">
			<div class="section-head">
				<div>
					<p class="section-eyebrow">Featured Components</p>
					<h2 class="section-title">Production-Proven Parts Across Regulated Industries</h2>
					<p class="section-lead">
						Representative custom components shipped monthly under strict NDA, material traceability, and zero-defect sampling plans.
					</p>
				</div>
				<div class="filter-bar" role="group" aria-label="Filter featured products by alloy" style="background:#e2e8f0;">
					<button type="button" class="filter-btn is-active" data-part-filter="all">All Alloys</button>
					<button type="button" class="filter-btn" data-part-filter="aluminum">Aluminum</button>
					<button type="button" class="filter-btn" data-part-filter="stainless">Stainless Steel</button>
					<button type="button" class="filter-btn" data-part-filter="titanium">Titanium</button>
				</div>
			</div>

			<div class="grid-2">
				<article class="product-card" data-part-material="aluminum">
					<div class="product-media">
						<img src="<?php echo esc_url( $img_base . '/part-aerospace-bracket.jpg' ); ?>" alt="Precision 5-axis CNC machined 7075-T6 aerospace aluminum structural bracket" referrerpolicy="no-referrer">
					</div>
					<div class="product-body">
						<div class="product-meta">
							<span>Aerospace &amp; UAV Structures</span><span aria-hidden="true">·</span><span>5-Axis Milling</span>
						</div>
						<h3 class="product-title">Aerospace Aluminum Brackets</h3>
						<p class="product-summary">Thin-wall pocketed structural rib brackets machined from stress-relieved billet plate with full datum flatness control.</p>
						<dl class="product-specs">
							<div><dt>Material</dt><dd class="font-mono">Al 7075-T6 / 6061-T6</dd></div>
							<div><dt>Tolerance</dt><dd class="font-mono">±0.005 mm</dd></div>
							<div><dt>Finish</dt><dd>Type III Hard Anodize</dd></div>
						</dl>
						<div class="product-cta">
							<button type="button" class="btn btn-outline-dark" data-open-rfq data-process="5-Axis Milling" data-material="Aluminum 7075-T6" data-tolerance="±0.005 mm" data-notes="Reference component: Aerospace Aluminum Brackets (Type III Hard Anodize)">
								Request Similar Part Quote →
							</button>
						</div>
					</div>
				</article>

				<article class="product-card" data-part-material="stainless">
					<div class="product-media">
						<img src="<?php echo esc_url( $img_base . '/part-stainless-shaft.jpg' ); ?>" alt="CNC Swiss-turned 316L stainless steel stepped shafts and precision threaded hydraulic sleeves" referrerpolicy="no-referrer">
					</div>
					<div class="product-body">
						<div class="product-meta">
							<span>Fluid Control &amp; Robotics</span><span aria-hidden="true">·</span><span>Swiss CNC Turning</span>
						</div>
						<h3 class="product-title">Stainless Steel Shafts</h3>
						<p class="product-summary">Concentric multi-stepped rotor shafts, micro-threaded valve stems, and cross-ported hydraulic sleeves with Ra 0.4 µm bearing journals.</p>
						<dl class="product-specs">
							<div><dt>Material</dt><dd class="font-mono">SS 316L / 17-4PH</dd></div>
							<div><dt>Tolerance</dt><dd class="font-mono">±0.004 mm</dd></div>
							<div><dt>Finish</dt><dd>Ground + Passivated</dd></div>
						</dl>
						<div class="product-cta">
							<button type="button" class="btn btn-outline-dark" data-open-rfq data-process="CNC Turning" data-material="Stainless Steel 316L / 17-4PH" data-tolerance="±0.004 mm" data-notes="Reference component: Stainless Steel Shafts (Centerless Ground + Passivated)">
								Request Similar Part Quote →
							</button>
						</div>
					</div>
				</article>

				<article class="product-card" data-part-material="titanium">
					<div class="product-media">
						<img src="<?php echo esc_url( $img_base . '/part-medical-titanium.jpg' ); ?>" alt="Precision 5-axis machined Ti-6Al-4V titanium surgical instrument housings and medical components" referrerpolicy="no-referrer">
					</div>
					<div class="product-body">
						<div class="product-meta">
							<span>Surgical &amp; Diagnostic Devices</span><span aria-hidden="true">·</span><span>5-Axis Mill-Turn</span>
						</div>
						<h3 class="product-title">Medical Titanium Components</h3>
						<p class="product-summary">Burr-free surgical instrument housings, endoscopic couplings, and bone-fixation hardware inspected under 40x optical magnification.</p>
						<dl class="product-specs">
							<div><dt>Material</dt><dd class="font-mono">Ti-6Al-4V (Grade 5)</dd></div>
							<div><dt>Tolerance</dt><dd class="font-mono">±0.005 mm</dd></div>
							<div><dt>Finish</dt><dd>Electropolished</dd></div>
						</dl>
						<div class="product-cta">
							<button type="button" class="btn btn-outline-dark" data-open-rfq data-process="5-Axis Milling" data-material="Titanium Ti-6Al-4V (Grade 5)" data-tolerance="±0.005 mm" data-notes="Reference component: Medical Titanium Components (Electropolished)">
								Request Similar Part Quote →
							</button>
						</div>
					</div>
				</article>

				<article class="product-card" data-part-material="aluminum">
					<div class="product-media">
						<img src="<?php echo esc_url( $img_base . '/hero-cnc.jpg' ); ?>" alt="Complex 5-axis machined aluminum manifold housing mounted inside precision CNC rotary trunnion" referrerpolicy="no-referrer">
					</div>
					<div class="product-body">
						<div class="product-meta">
							<span>Semiconductor &amp; Photonics</span><span aria-hidden="true">·</span><span>5-Axis Milling</span>
						</div>
						<h3 class="product-title">Optical &amp; Sensor Housings</h3>
						<p class="product-summary">Light-tight monolithic sensor enclosures and thermal cold plates engineered for leak-tested vacuum and metrology assemblies.</p>
						<dl class="product-specs">
							<div><dt>Material</dt><dd class="font-mono">Al 6061-T651</dd></div>
							<div><dt>Tolerance</dt><dd class="font-mono">±0.005 mm</dd></div>
							<div><dt>Finish</dt><dd>Black Matte Anodize</dd></div>
						</dl>
						<div class="product-cta">
							<button type="button" class="btn btn-outline-dark" data-open-rfq data-process="5-Axis Milling" data-material="Aluminum 6061-T651" data-tolerance="±0.005 mm" data-notes="Reference component: Optical & Sensor Housings (Matte Black Anodize)">
								Request Similar Part Quote →
							</button>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<!-- SECTION 4: QUALITY ASSURANCE -->
	<section id="quality" class="section-pad">
		<div class="container-b2b">
			<div class="quality-grid">
				<div>
					<p class="section-eyebrow">Quality Assurance &amp; Metrology</p>
					<h2 class="section-title">Verified Dimensional Inspection Before Every Shipment</h2>
					<p class="section-lead">
						Quality is built into our G-code verification and in-process probing rather than inspected only at final pack-out. Virtual factory audits and live CMM witness sessions are available on request.
					</p>

					<ol class="quality-steps">
						<li class="quality-step">
							<span class="cap-num">01.</span>
							<div>
								<h3>Incoming Material Verification &amp; Mill Certs</h3>
								<p>Every aluminum, stainless, and titanium bar arrives with EN 10204 3.1 mill test certificates and XRF alloy verification prior to cutting.</p>
							</div>
						</li>
						<li class="quality-step">
							<span class="cap-num">02.</span>
							<div>
								<h3>First Article Inspection (AS9102 FAI)</h3>
								<p>Initial off-tool components undergo full ballooned drawing verification before batch production release, with digital FAI reports sent on request.</p>
							</div>
						</li>
						<li class="quality-step">
							<span class="cap-num">03.</span>
							<div>
								<h3>100% Bridge CMM &amp; Optical Metrology</h3>
								<p>Critical GD&amp;T true position, concentricity, and profile tolerances are measured inside our 20 °C climate-controlled inspection lab.</p>
							</div>
						</li>
						<li class="quality-step">
							<span class="cap-num">04.</span>
							<div>
								<h3>Export-Grade Protection &amp; Lot Traceability</h3>
								<p>Parts are ultrasonically cleaned, VCI-wrapped or placed in custom foam trays, and shipped via DHL/FedEx Air or sea freight worldwide.</p>
							</div>
						</li>
					</ol>
				</div>

				<div class="quality-visual">
					<div class="quality-photo">
						<img src="<?php echo esc_url( $img_base . '/facility-cmm.jpg' ); ?>" alt="Climate-controlled metrology laboratory with bridge Coordinate Measuring Machine inspecting aluminum manifold" referrerpolicy="no-referrer">
					</div>
					<div class="quality-kpis">
						<div>
							<div class="quality-kpi-label">Bridge CMM Accuracy</div>
							<div class="quality-kpi-val">±1.8 µm</div>
						</div>
						<div>
							<div class="quality-kpi-label">Certification</div>
							<div class="quality-kpi-val">ISO 9001:2015</div>
						</div>
						<div>
							<div class="quality-kpi-label">Inspection Docs</div>
							<div class="quality-kpi-val">FAI / CoC / 3.1</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION 5: INSTANT RFQ & CONTACT -->
	<section id="contact" class="section-pad section-dark">
		<div class="container-b2b">
			<div class="rfq-grid">
				<div>
					<p class="section-eyebrow section-eyebrow-light">Request for Quotation</p>
					<h2 class="section-title" style="color:#ffffff;">Send Your Drawing for a 24-Hour DFM &amp; Cost Quote</h2>
					<p class="section-lead" style="color:#cbd5e1;">
						Share your process requirements, material grade, and batch quantity. Our manufacturing engineers review every RFQ for manufacturability before quoting.
					</p>

					<dl class="rfq-info-list">
						<div>
							<dt>Engineering &amp; RFQ Desk</dt>
							<dd><a href="mailto:rfq@apexforge-cnc.com" style="text-decoration:underline;text-underline-offset:4px;">rfq@apexforge-cnc.com</a></dd>
						</div>
						<div>
							<dt>WhatsApp Direct Engineering</dt>
							<dd class="font-mono">+86 155 1187 6112</dd>
						</div>
						<div>
							<dt>Supported CAD &amp; NDA Protection</dt>
							<dd>STEP (.stp), IGES (.igs), Parasolid (.x_t), DXF, PDF · Mutual NDA signed before file transfer</dd>
						</div>
						<div>
							<dt>Export Incoterms &amp; Logistics</dt>
							<dd>EXW, FOB, CIF, DDP Air Express (DHL / FedEx / UPS)</dd>
						</div>
					</dl>
				</div>

				<div class="rfq-card">
					<div id="b2b-inline-success" class="rfq-success" role="status" hidden>
						<p style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.06em;color:#047857;">RFQ Submitted</p>
						<h3 class="font-display" style="margin-top:8px;font-size:1.5rem;font-weight:700;">Thank you — Reference <span id="b2b-inline-ref" class="font-mono" style="color:#0369a1;"></span></h3>
						<p style="margin-top:10px;font-size:0.9375rem;color:#475569;">A manufacturing engineer will send your formal quotation and DFM review within 24 hours.</p>
						<button type="button" id="b2b-inline-reset" class="btn btn-outline-dark" style="width:auto;margin-top:20px;">Submit Another Inquiry</button>
					</div>

					<form id="b2b-inline-form" novalidate>
						<div class="rfq-card-head">
							<h3 class="font-display" style="font-size:1.125rem;font-weight:700;">Instant Project Quote Form</h3>
							<span style="font-size:0.75rem;font-weight:600;color:#64748b;">NDA Protected</span>
						</div>

						<div class="form-grid-2">
							<div class="field-group">
								<label class="field-label" for="rfq-name">Full Name *</label>
								<input id="rfq-name" name="name" type="text" required class="field-control" placeholder="e.g. Michael Carter">
							</div>
							<div class="field-group">
								<label class="field-label" for="rfq-email">Business Email *</label>
								<input id="rfq-email" name="email" type="email" required class="field-control" placeholder="name@company.com">
							</div>
						</div>

						<div class="form-grid-2">
							<div class="field-group">
								<label class="field-label" for="rfq-company">Company Name *</label>
								<input id="rfq-company" name="company" type="text" required class="field-control" placeholder="Company & Country">
							</div>
							<div class="field-group">
								<label class="field-label" for="rfq-process">Primary Process</label>
								<select id="rfq-process" name="process" class="field-control">
									<option>5-Axis Milling</option>
									<option>CNC Turning</option>
									<option>Sheet Metal Fabrication</option>
									<option>Surface Finishing</option>
								</select>
							</div>
						</div>

						<div class="form-grid-3">
							<div class="field-group">
								<label class="field-label" for="rfq-material">Material Grade</label>
								<select id="rfq-material" name="material" class="field-control">
									<option>Aluminum 6061-T6 / 7075-T6</option>
									<option>Stainless Steel 304 / 316L / 17-4PH</option>
									<option>Titanium Ti-6Al-4V (Grade 5)</option>
									<option>Brass C360 / Copper C110</option>
									<option>Engineering Plastic (PEEK / Delrin)</option>
								</select>
							</div>
							<div class="field-group">
								<label class="field-label" for="rfq-tolerance">Target Tolerance</label>
								<select id="rfq-tolerance" name="tolerance" class="field-control">
									<option>±0.005 mm (Precision)</option>
									<option>±0.010 mm (Tight)</option>
									<option>±0.025 mm (ISO 2768-f)</option>
									<option>±0.050 mm (Standard)</option>
								</select>
							</div>
							<div class="field-group">
								<label class="field-label" for="rfq-qty">Batch Quantity</label>
								<select id="rfq-qty" name="quantity" class="field-control">
									<option>1 – 9 pcs (Prototype)</option>
									<option selected>10 – 50 pcs (Prototype / Pilot)</option>
									<option>50 – 500 pcs (Low Volume)</option>
									<option>500+ pcs (Production)</option>
								</select>
							</div>
						</div>

						<div class="field-group">
							<label class="field-label" for="rfq-notes">Specifications, Surface Finish &amp; CAD File Link (Optional)</label>
							<textarea id="rfq-notes" name="notes" rows="3" class="field-control" placeholder="Include part dimensions, surface finish (e.g. Type III Anodize), delivery port, or link to STEP/PDF files."></textarea>
						</div>

						<div id="b2b-inline-error" class="form-alert" role="alert" hidden></div>
						<button type="submit" class="btn btn-primary" style="width:100%;padding:13px 20px;">Submit RFQ for 24-Hour Quote</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
