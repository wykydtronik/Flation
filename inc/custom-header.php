<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package Flation
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses flation_header_style()
 */
function flation_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'flation_custom_header_args', array(
		'default-text-color'     => 'ffffff',
		'width'                  => 1140,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'flation_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'flation_custom_header_setup' );

if ( ! function_exists( 'flation_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see flation_custom_header_setup().
 */
function flation_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // flation_header_style

function flation_header_text_color_css() {
	$header_text_color = get_header_textcolor();

	$css = '
			.dropdown-menu > li > a,
			.navbar-nav > li > a,
			.navbar-brand {
				color: #%1$s!important;
			}
	';

	wp_add_inline_style( 'flation-style', sprintf( $css, $header_text_color ) );
}

add_action( 'wp_enqueue_scripts', 'flation_header_text_color_css');