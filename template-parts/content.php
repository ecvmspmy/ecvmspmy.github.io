<?php
/**
 * The default template for displaying content
 *
 * @package Wisteria
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-content-wrapper post-content-wrapper-archive">

		<?php wisteria_featured_image(); ?>

		<div class="entry-data-wrapper entry-data-wrapper-archive">
			<div class="entry-header-wrapper entry-header-wrapper-archive">
				<?php if ( 'post' === get_post_type() ) : // For Posts ?>
				<div class="entry-meta entry-meta-header-before">
					<?php
					wisteria_post_first_category();
					wisteria_sticky_post();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>

				<header class="entry-header">
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%1$s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
				</header><!-- .entry-header -->

				<?php if ( 'post' === get_post_type() ) : // For Posts ?>
				<div class="entry-meta entry-meta-header-after">
					<?php
					wisteria_posted_on();
					wisteria_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</div><!-- .entry-header-wrapper -->

			<?php if ( wisteria_has_excerpt() ) : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php endif; ?>
		</div><!-- .entry-data-wrapper -->

	</div><!-- .post-content-wrapper -->
</article><!-- #post-## -->
