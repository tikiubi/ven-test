<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>

<!-- FOOTER -->
<footer class="footer  bg-black" role="contentinfo">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="<?php echo get_theme_mod('ven_footer_logo'); ?>" class="footer__logo"/>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                    <div class="col-lg-5">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                </div>
                <div class="footer__3-columns-list">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            </div>
            <div class="offset-1 col-md-5">
                <h2 class="footer__form__title font--chunkfive-print">
                    <?php echo get_theme_mod('footer_contact_form_title'); ?>
                </h2>

                <!-- Bootstrap form -->
                <div class="footer__form__body">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="your email">
                        <button type="submit" class="btn btn-primary">sign up</button>
                    </form>
                </div>

                <div class="footer__form__lead">
                    <?php echo get_theme_mod('footer_contact_form_text'); ?>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <?php echo get_theme_mod('footer_copyright'); ?>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<?php wp_footer(); ?>
</body>
</html>