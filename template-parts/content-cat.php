<?php
/**
 * Template part for displaying categorized content in category.php also used as default archive and tagged content display.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Two-Four
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-cat-header">
		<?php the_title( '<h1 class="entry-cat-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php two_four_post_thumbnail(); ?>

	<div class="entry-cat-content">
		<?php
		the_excpert();		
		?>
	</div><!-- .entry-cat-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-cat-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'two-four' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
