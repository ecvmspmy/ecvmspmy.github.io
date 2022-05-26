<?php
/**
 * Deprecated functions from past theme versions. You shouldn't use these
 * functions and look for the alternatives instead. The functions will be
 * removed in a later version.
 *
 * @package Wisteria
 * @subpackage Deprecated
 */

/*
 * Deprecated functions come here to die.
 */

/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index
 * views, or a div element when on single views.
 *
 * @since 1.0
 * @deprecated 1.1.3 Use wisteria_featured_image()
 * @see wisteria_featured_image()
 *
 * @param string $size Size of the image.
 * @return void
*/
function wisteria_post_thumbnail( $size = 'wisteria-featured' ) {
	_deprecated_function( __FUNCTION__, '1.1.3', 'wisteria_featured_image()' );

	wisteria_featured_image();
}
