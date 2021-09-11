<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">


    <div class="container">

        <div class="row">

            <div class="col-6">
                LICENCE NO. 440245 <br>
                &copy; <?php echo date('Y');?> LFR Hong Kong Limited. All rights reserved.

            </div>
            <div class="col-6 text-end">

                <ul class="sm-ul">
                    <li> <a href="#"><img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-1@2x-1.png"
                                alt=""></a></li>
                    <li> <a href="#"><img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-2@2x.png"
                                alt=""></a></li>
                    <li> <a href="#"><img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-3@2x-1.png"
                                alt=""></a></li>
                    <li> <a href="#"><img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-4@2x-1.png"
                                alt=""></a></li>
                    <li> <a href="#"><img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-5@2x-1.png"
                                alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>