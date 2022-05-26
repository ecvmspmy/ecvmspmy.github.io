<?php
/**
 * The template part for displaying an Author Bio
 *
 * @package Wisteria
 */
?>

<div class="entry-author">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'wisteria_author_bio_avatar_size', 80 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-heading">
		<h2 class="author-title"><?php printf( esc_html__( 'Published by %1$s', 'wisteria' ), '<span class="author-name">' . get_the_author() . '</span>' ); ?></h2>
	</div><!-- .author-heading -->

	<div class="author-bio">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php printf( esc_html__( 'View all posts by %1$s', 'wisteria' ), get_the_author() ); ?>
		</a>
	</div><!-- .author-bio -->
</div><!-- .entry-auhtor -->
