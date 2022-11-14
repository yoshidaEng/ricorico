<!-- footer -->
<footer class="footer">
    <div class="footer__inner">
        <div class="footer__logo">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_footer_tab.svg" media="(min-width: 768px)" width="170" height="100">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_footer_mobile.svg" alt="cat cafe rico"  width="100" height="60">
            </picture>
        </div><!-- /.footer_logo -->

        <div class="footer__menuBox">

            <!-- footerMenu -->
            <ul class="footerMenu">
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="footerMenu__link">トップページ</a>
                </li>
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url( '/concept' ) ); ?>" class="footerMenu__link">Cat Cafe Ricoとは</a>
                </li>
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="footerMenu__link">ねこスタッフ</a>
                </li>
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url( '/assign' ) ); ?>" class="footerMenu__link">譲渡について</a>
                </li>
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url( '/recent' ) ); ?>" class="footerMenu__link">ねこブログ</a>
                </li>
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="footerMenu__link">お問い合わせ</a>
                </li>
                <li class="footerMenu__item">
                    <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="footerMenu__link">よくあるご質問</a>
                </li>
            </ul>
        </div><!-- /.footer__menuBox -->
        <p class="footer__copyright"><small lang="en">&copy; © Cat Cafe Rico All Rights Reserved. 2021</small></p>
    </div><!-- /.footer__inner -->
</footer>

<?php wp_footer(); ?>

</body>

</html>