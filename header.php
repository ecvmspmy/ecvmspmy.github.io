<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wisteria
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
/**
 * New wp_body_open Theme Hook - WordPress 5.2
 * Backward Compatibility
 * This can be removed at the launch of WordPress 5.4
 *
 * @see https://make.wordpress.org/core/2019/04/24/miscellaneous-developer-updates-in-5-2/
 */
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>
<div id="page" class="site-wrapper site">

	<?php
	// Site Header
	get_template_part( 'template-parts/site-header' );

	// Site Navigation
	get_template_part( 'template-parts/site-navigation' );
	?>

	<div id="content" class="site-content">
