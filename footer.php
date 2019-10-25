<footer class="footer">
    <div class="wrap">
        <div class="footer-flex">
            <div class="footer__items">
                <div class="footer__title">Навигация</div>
                <nav class="footer__links">
                <?php wp_nav_menu([
                    'theme_location'  => 'footermenunavigation'
                    ]); ?>
                </nav>
            </div>
            <!-- end footer__items -->
            <div class="footer__items">
                <div class="footer__title">Выбор мастера</div>
                <nav class="footer__links">
                <?php wp_nav_menu([
                    'theme_location'  => 'footer_links_master'
                    ]); ?>
                </nav>
            </div>
            <!-- end footer__items -->

            <div class="footer__warranty">
                <div class="footer__title">
                    Гарантия
                </div>
                <div class="footer-desc">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/certificate.png" alt="гарантия возврата денег">
                    <div><span class="footer__ears"> 3 года</span><br />
                        Гарантия на все виды <br>
                        выполняемых работ</div>
                </div>
            </div>
        </div>
        <!-- end footer-flex -->
    </div>
</footer>
<!-- end wrap -->
<footer>
    <div class="footer-bottom__line">
        <div class="wrap">
            <div class="footer-bottom__flex">
                <div class="footer-bottom__item">
                    Профессиональные услуги <br> мастеров &#169; 2019
                </div>
                <div class="footer-bottom__item">
                    <span> Выезд мастера<br>
                        Бесплатно</span>
                </div>
                <div class="footer-bottom__item">
                    <p>телефон : <a href="tel:89518988811">8-(951)-898-88-11</a></p>
                    <p>почта : <a href="mailto:mastera.elabugi@gmail.com">support@dommaster.pro</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>