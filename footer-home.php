	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'two-four' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'two-four' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'two-four' ), 'two-four', '<a href="https://gitlab.com/two-four/">Two Four</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
 
<?php wp_footer(); ?>

</body>
</html>
