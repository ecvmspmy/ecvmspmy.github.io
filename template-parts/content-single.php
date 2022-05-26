<?php
/**
 * Template part for displaying single posts.
 *
 * @package Wisteria
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header-wrapper entry-header-wrapper-single">
		<div class="entry-meta entry-meta-single entry-meta-header-before">
			<?php
			wisteria_posted_on();
			wisteria_posted_by();
			wisteria_post_edit_link();
			?>
		</div><!-- .entry-meta -->

		<header class="entry-header entry-header-single">
			<?php the_title( '<h1 class="entry-title entry-title-single">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div><!-- .entry-header-wrapper -->

	<div class="entry-content entry-content-single">
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

	<footer class="entry-meta entry-meta-single entry-meta-footer">
		<?php wisteria_entry_footer(); ?>
	</footer><!-- .entry-meta -->

</article><!-- #post-## -->
