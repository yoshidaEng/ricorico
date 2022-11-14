<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Cafe Rico</title>
    <meta name="title" content="Cat Cafe Rico">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/body-scroll-lock/lib/bodyScrollLock.js"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php if ( is_front_page() ) : ?>

        <!-- header -->
        <header class="header _fixed">
            <div class="header__inner">
                <div class="header_logo">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_header_tab.svg" media="(min-width: 768px)" width="170" height="100">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_header_mobile.svg" alt="cat cafe ricoロゴ" width="100" height="60">
                        </picture>
                    </a>
                </div><!-- /.header_logo -->

                <!-- menuBtn -->
                <button id="menuBtn" class="menuBtn" aria-label="メニューを開く" aria-controls="menu" aria-expanded="false">
                    <span class="menuBtn__line" aria-hidden="true"></span>
                    <span class="menuBtn__text">Menu</span>
                </button>

                <!-- menu -->
                <nav id="menu" class="menu" aria-label="メニュー" aria-hidden="true">
                    <div class="menu__inner">
                        <ul class="menu__list">
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url() ); ?>" class="menu__link">TOP</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/concept' ) ); ?>" class="menu__link">Cat Cafe Ricoとは</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="menu__link">ねこスタッフ</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/assign' ) ); ?>" class="menu__link">譲渡について</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/recent' ) ); ?>" class="menu__link">ねこブログ</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="menu__link">お問い合わせ</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="menu__link">よくあるご質問</a></li>
                        </ul>
                        <div class="menu__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_header_mobile.svg" alt="cat cafe ricoロゴ" width="100" height="60">
                        </div><!-- /.menu__logo -->
                    </div><!-- /.menu__inner -->
                </nav>

                <!-- circleBg -->
                <div class="circleBg" aria-hidden="true"></div><!-- /.menu__circleBg -->

            </div><!-- /.header__inner -->
        </header><!-- /.header -->

    <?php else : ?>

        <!-- header -->
        <header class="header">
            <div class="header__inner">
                <div class="header_logo">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_header_tab.svg" media="(min-width: 768px)" width="170" height="100">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_header_mobile.svg" alt="cat cafe ricoロゴ" width="100" height="60">
                        </picture>
                    </a>
                </div><!-- /.header_logo -->

                <!-- menuBtn -->
                <button id="menuBtn" class="menuBtn" aria-label="メニューを開く" aria-controls="menu" aria-expanded="false">
                    <span class="menuBtn__line" aria-hidden="true"></span>
                    <span class="menuBtn__text">Menu</span>
                </button>

                <!-- menu -->
                <nav id="menu" class="menu" aria-label="メニュー" aria-hidden="true">
                    <div class="menu__inner">
                        <ul class="menu__list">
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url() ); ?>" class="menu__link">TOP</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/concept' ) ); ?>" class="menu__link">Cat Cafe Ricoとは</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="menu__link">ねこスタッフ</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/assign' ) ); ?>" class="menu__link">譲渡について</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/recent' ) ); ?>" class="menu__link">ねこブログ</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="menu__link">お問い合わせ</a></li>
                            <li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="menu__link">よくあるご質問</a></li>
                        </ul>
                        <div class="menu__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_header_mobile.svg" alt="cat cafe ricoロゴ" width="100" height="60">
                        </div><!-- /.menu__logo -->
                    </div><!-- /.menu__inner -->
                </nav>

                <!-- circleBg -->
                <div class="circleBg" aria-hidden="true"></div><!-- /.menu__circleBg -->

            </div><!-- /.header__inner -->
        </header><!-- /.header -->

    <?php endif; ?>

