<?php
/**
 * The default template for displaying content
 *
 * @package Wisteria
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	// Retrieve attachment metadata.
	$metadata = wp_get_attachment_metadata();
	?>

	<div class="entry-header-wrapper entry-header-wrapper-single">
		<header class="entry-header entry-header-single">
			<?php the_title( '<h1 class="entry-title entry-title-single">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-meta entry-meta-single entry-meta-header-after">
			<?php wisteria_posted_on(); ?>
			<?php if ( $post->post_parent ) : ?>
			<span class="parent-post-link">
				<a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>" rel="gallery">
					<?php echo esc_html( get_the_title( $post->post_parent ) ); ?>
				</a>
			</span>
			<?php endif; ?>
			<span class="full-size-link">
				<a href="<?php echo esc_url( wp_get_attachment_url() ); ?>" target="_blank">
					<?php echo esc_html( $metadata['width'] ); ?> &times; <?php echo esc_html( $metadata['height'] ); ?>
				</a>
			</span>
			<?php wisteria_post_edit_link(); ?>
			</ul>
		</div><!-- .entry-meta -->
	</div><!-- .entry-header-wrapper -->

	<div class="entry-attachment">
		<div class="attachment">
			<?php wisteria_the_attached_image(); ?>
		</div><!-- .attachment -->

		<?php if ( has_excerpt() ) : ?>
		<div class="entry-caption">
			<?php the_excerpt(); ?>
		</div><!-- .entry-caption -->
		<?php endif; ?>
	</div><!-- .entry-attachment -->

	<div class="entry-content entry-content-single entry-content-attachment">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'wisteria' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( wisteria_has_post_edit_link() ) : ?>
	<footer class="entry-meta entry-meta-single entry-meta-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'wisteria' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
	<?php endif; ?>

</article><!-- #post-## -->
