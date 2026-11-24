<?php
/**
 * Theme functions and definitions for My B2B Foreign Trade Theme.
 *
 * @package My_B2B_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_b2b_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'my-b2b-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'my_b2b_theme_setup' );

function my_b2b_theme_enqueue_assets() {
	wp_enqueue_style(
		'my-b2b-google-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'my-b2b-theme-style',
		get_stylesheet_uri(),
		array( 'my-b2b-google-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'my-b2b-theme-script',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'my-b2b-theme-script',
		'b2bThemeData',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'b2b_rfq_nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'my_b2b_theme_enqueue_assets' );

function my_b2b_handle_rfq_submit() {
	check_ajax_referer( 'b2b_rfq_nonce', 'nonce' );

	$name      = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email     = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$company   = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$process   = isset( $_POST['process'] ) ? sanitize_text_field( wp_unslash( $_POST['process'] ) ) : '5-Axis Milling';
	$material  = isset( $_POST['material'] ) ? sanitize_text_field( wp_unslash( $_POST['material'] ) ) : '';
	$tolerance = isset( $_POST['tolerance'] ) ? sanitize_text_field( wp_unslash( $_POST['tolerance'] ) ) : '';
	$quantity  = isset( $_POST['quantity'] ) ? sanitize_text_field( wp_unslash( $_POST['quantity'] ) ) : '';
	$notes     = isset( $_POST['notes'] ) ? sanitize_textarea_field( wp_unslash( $_POST['notes'] ) ) : '';

	if ( empty( $name ) || ! is_email( $email ) || empty( $company ) ) {
		wp_send_json_error(
			array( 'message' => 'Please complete your name, valid business email, and company name.' ),
			400
		);
	}

	$ref_id  = 'RFQ-' . gmdate( 'Y' ) . '-' . wp_rand( 1000, 9999 );
	$to      = get_option( 'admin_email' );
	$subject = sprintf( '[%s] New CNC RFQ from %s (%s)', $ref_id, $company, $process );
	$body    = "Reference: {$ref_id}
"
		. "Contact Name: {$name}
"
		. "Business Email: {$email}
"
		. "Company: {$company}
"
		. "Process: {$process}
"
		. "Material: {$material}
"
		. "Target Tolerance: {$tolerance}
"
		. "Quantity: {$quantity}

"
		. "Notes & Specifications:
{$notes}
";

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		"Reply-To: {$name} <{$email}>",
	);

	wp_mail( $to, $subject, $body, $headers );

	wp_send_json_success(
		array(
			'refId'   => $ref_id,
			'process' => $process,
			'email'   => $email,
		)
	);
}
add_action( 'wp_ajax_b2b_rfq_submit', 'my_b2b_handle_rfq_submit' );
add_action( 'wp_ajax_nopriv_b2b_rfq_submit', 'my_b2b_handle_rfq_submit' );
