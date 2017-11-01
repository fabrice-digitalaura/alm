<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alamaree
 */

?>

            </div><!-- #content -->

            <footer id="colophon" class="site-footer">
                    <div class="site-info">
                            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alm' ) ); ?>"><?php
                                    /* translators: %s: CMS name, i.e. WordPress. */
                                    printf( esc_html__( 'Proudly powered by %s', 'alm' ), 'WordPress' );
                            ?></a>
                            <span class="sep"> | </span>
                            <?php
                                    /* translators: 1: Theme name, 2: Theme author. */
                                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'alm' ), 'alm', '<a href="http://barros.fr">F.BARROS</a>' );
                            ?>
                    </div><!-- .site-info -->
            </footer><!-- #colophon -->
            <div id="site-cache" class="site-cache"></div>
    </div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- #site-container -->
</body>
</html>
