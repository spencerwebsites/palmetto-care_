<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Palmetto_Community_Care
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <?php
            /* translators: 2: Theme URL. */
            printf( esc_html__( '&copy; %1$s %2$s.', 'palmetto-care' ), date('Y'), '<a href="' . site_url() .'">Palmetto Community Care</a>' );
            ?>
			<span class="sep"> | </span>
            <?php
            /* translators: 1: Theme author. */
            printf( esc_html__( 'Designed by %1$s and %2$s.', 'palmetto-care' ), '<a href="https://heybrilliance.com/" target="_blank" rel="noreferrer nofollow">Brilliance</a>', '<a href="https://spencercreative.co/" target="_blank" rel="noreferrer nofollow">Spencer Creative Co</a>' );
            ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
