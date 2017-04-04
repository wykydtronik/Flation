<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'flation' ); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
			</div>
			
				<?php
					wp_nav_menu( array(
						'menu' => '',
						'theme_location' => 'primary',
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navbar',
						'depth' => 2,
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
						'walker' => new wp_bootstrap_navwalker()
					) );
				?>

		</div>
	</nav>

	<?php if ( get_header_image() ) : ?>
		<?php
			$custom_header_sizes = apply_filters( 'flation_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
		?>
		<div class="header-image">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div id="content" class="main-wrapper">
		<div class="container">
			<div class="row">
