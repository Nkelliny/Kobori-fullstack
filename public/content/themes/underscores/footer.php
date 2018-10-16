<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( '#', ' ' ) ); ?>"><?php printf( __( '© 2018 Desenvolvido por %s', '_s' ), 'Kobori Ubiratan' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: ', '_s' ), '_s', '<a href="#" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
