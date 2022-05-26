<?php
/**
 * The template for displaying site navigation
 * @package Wisteria
 */
?>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="main-navigation-inside">

					<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wisteria' ); ?></a>
					<div class="toggle-menu-wrapper">
						<a href="#header-menu-responsive" title="<?php esc_attr_e( 'Menu', 'wisteria' ); ?>" class="toggle-menu-control">
							<span class="toggle-menu-label"><?php esc_html_e( 'Menu', 'wisteria' ); ?></span>
						</a>
					</div>

					<?php
					// Header Menu
					wp_nav_menu( apply_filters( 'wisteria_header_menu_args', array(
						'container'       => 'div',
						'container_class' => 'site-header-menu',
						'theme_location'  => 'header-menu',
						'menu_class'      => 'header-menu sf-menu',
						'menu_id'         => 'menu-1',
						'depth'           => 3,
					) ) );
					?>

				</div><!-- .main-navigation-inside -->

			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</nav><!-- .main-navigation -->
