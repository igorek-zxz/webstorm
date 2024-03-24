<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="storm-header">
        <div class="storm-header__row storm-header__row-first">
            <div class="storm-header__container">
                <div class="storm-header__left">
                    <a href="mailto:info@yandex.ru" class="storm-header__contact-link">
                        <div class="storm-header__icon">
                            <?php echo webstorm_get_svg( array( 'icon' => 'mail' ) ); ?>
                        </div>
                        <span class="storm-header__text">info@yandex.ru</span>
                    </a>
                    <a href="https://yandex.ru/maps/43/kazan/" rel="nofollow" target="_blank" class="storm-header__contact-link">
                        <div class="storm-header__icon">
                            <?php echo webstorm_get_svg( array( 'icon' => 'mapmarker' ) ); ?>
                        </div>
                        <span class="storm-header__text">Казань, ул. Декабристов, д.56, оф.301</span>
                    </a>
                    <div class="storm-header__contact-link">
                        <div class="storm-header__icon">
                            <?php echo webstorm_get_svg( array( 'icon' => 'clock' ) ); ?>
                        </div>
                        <span class="storm-header__text">Пн - Пт: 8:00 - 17:00</span>
                    </div>
                </div>
                <div class="storm-header__right">
                    <a href="tel:+78432221111" class="storm-header__contact-link">
                        <div class="storm-header__icon">
                            <?php echo webstorm_get_svg( array( 'icon' => 'phone' ) ); ?>
                        </div>
                        <span class="storm-header__text">(843) 222-11-11</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="storm-header__row storm-header__sticky">
            <div class="storm-header__container">
                <div class="storm-header__left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="storm-header__logo-link">
                        LOGO
                    </a>
                </div>
                <nav class="storm-header__right">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'header_menu',
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'storm-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 2,
                        'walker'          => new Storm_Walker_Nav_Menu(),
                    ] );?>
                </nav>
            </div>
        </div>
    </header>