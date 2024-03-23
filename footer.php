    <footer class="storm-footer">
        <div class="storm-footer__row">
            <div class="storm-footer__col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="storm-footer__logo-link">
                    LOGO
                </a>
                <div class="storm-footer__list-wrap">
                    <a href="<?php echo esc_url( home_url( '/' ) . "sitemap_index.xml" ); ?>" class="storm-footer__list-item">
                        <div class="storm-footer__icon">
                            <?php echo webstorm_get_svg( array( 'icon' => 'sitemap' ) ); ?>
                        </div>
                        <span class="storm-footer__text">Карта сайта</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/' ) . "privacy-policy/" ); ?>" class="storm-footer__list-item">
                        <div class="storm-footer__icon">
                            <?php echo webstorm_get_svg( array( 'icon' => 'privacy' ) ); ?>
                        </div>
                        <span class="storm-footer__text">Политика конфиденциальности</span>
                    </a>
                </div>
            </div>
            <div class="storm-footer__col list-contacts">
                <a href="tel:+78432221111" class="list-contacts__item">
                    <div class="list-contacts__icon">
                        <?php echo webstorm_get_svg( array( 'icon' => 'phone' ) ); ?>
                    </div>
                    <span class="list-contacts__text">(843) 222-11-11</span>
                </a>
                <a href="tel:+79995550011" class="list-contacts__item">
                    <div class="list-contacts__icon">
                        <?php echo webstorm_get_svg( array( 'icon' => 'phone' ) ); ?>
                    </div>
                    <span class="list-contacts__text">+7-999-555-00-11</span>
                </a>
                <a href="mailto:info@yandex.ru" class="list-contacts__item">
                    <div class="list-contacts__icon">
                        <?php echo webstorm_get_svg( array( 'icon' => 'mail' ) ); ?>
                    </div>
                    <span class="list-contacts__text">info@yandex.ru</span>
                </a>
                <a href="https://yandex.ru/maps/43/kazan/" class="list-contacts__item">
                    <div class="list-contacts__icon">
                        <?php echo webstorm_get_svg( array( 'icon' => 'mapmarker' ) ); ?>
                    </div>
                    <span class="list-contacts__text">Казань, ул. Декабристов, д.56, оф.301</span>
                </a>
                <div class="list-contacts__item">
                    <div class="list-contacts__icon">
                        <?php echo webstorm_get_svg( array( 'icon' => 'clock' ) ); ?>
                    </div>
                    <span class="list-contacts__text">Пн - Пт: 8:00 - 17:00</span>
                </div>
            </div>
            <div class="storm-footer__col">
                <h4 class="storm-footer__title">Обратная связь</h4>
                <p class="storm-footer__subtitle">Мы свяжемся с вами в течение 15 минут</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>