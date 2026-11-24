<?php
/**
 * Theme Header
 *
 * @package My_B2B_Theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ISO 9001:2015 certified custom CNC machining, 5-axis milling, Swiss turning, and 3-day rapid prototyping with tolerances down to ±0.005mm.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container-b2b header-inner">
		<a href="#home" class="brand-wordmark">ApexForge Precision</a>

		<nav class="main-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'my-b2b-theme' ); ?>">
			<a href="#home">Home</a>
			<a href="#capabilities">Capabilities</a>
			<a href="#products">Products</a>
			<a href="#quality">Quality</a>
			<a href="#contact">Contact</a>
		</nav>

		<div class="header-actions">
			<button type="button" class="btn btn-primary header-cta" data-open-rfq>Request a Quote</button>
			<button
				type="button"
				id="b2b-mobile-toggle"
				class="mobile-menu-btn"
				aria-label="Toggle navigation menu"
				aria-expanded="false"
				aria-controls="b2b-mobile-drawer"
			>
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<line x1="3" y1="6" x2="21" y2="6"></line>
					<line x1="3" y1="12" x2="21" y2="12"></line>
					<line x1="3" y1="18" x2="21" y2="18"></line>
				</svg>
			</button>
		</div>
	</div>

	<div id="b2b-mobile-drawer" class="mobile-drawer" hidden>
		<nav aria-label="Mobile Navigation">
			<a href="#home">Home</a>
			<a href="#capabilities">Capabilities</a>
			<a href="#products">Products</a>
			<a href="#quality">Quality</a>
			<a href="#contact">Contact</a>
			<button type="button" class="btn btn-primary" style="width:100%;margin-top:8px;" data-open-rfq>Request a Quote</button>
		</nav>
	</div>
</header>
