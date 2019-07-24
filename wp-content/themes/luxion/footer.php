<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage
 */
?>
<footer class="footer">

    <div class="footer__row container">

        <div class="footer__menu">
            <div class="footer__menu-column">
                <?php
                if (is_active_sidebar('footer-sidebar-1')) {
                    dynamic_sidebar('footer-sidebar-1');
                }
                ?>
            </div>

            <div class="footer__menu-column">
                <?php
                if (is_active_sidebar('footer-sidebar-2')) {
                    dynamic_sidebar('footer-sidebar-2');
                }
                ?>
            </div>

            <div class="footer__menu-column">
                <?php
                if (is_active_sidebar('footer-sidebar-3')) {
                    dynamic_sidebar('footer-sidebar-3');
                }
                ?>
            </div>
        </div>

        <div class="footer__info">
            <div class="footer__info-socials">

                <?php  get_template_part('parts/footer', 'socials'); ?>

            </div>
            <div class="footer__info-subscribe">
                <h5 class="footer__info-subscribe-title">Subscribe to news</h5>
                <form action="<?= get_home_url(); ?>/thank-you" method="post" class="footer__info-subscribe-form">
                    <div class="footer__info-subscribe-form__wrap">
                        <input type="email" value="" name="email-subscribe" class="footer__info-subscribe-input"
                               placeholder="Email Address">
                        <input type="submit" class="footer__info-subscribe-submit">
                    </div>
                </form>
            </div>
        </div>

    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
