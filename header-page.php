<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Профессиональные услуги мастеров">
    <!-- подключение шрифтов -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

    <title>Частный мастер</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-line-page">
        <div class="wrap">
            <header class="header-navigation">
                <div class="logo">
                    <a href="<?php bloginfo('url') ?>">
                        <span>дом<span class="logo-text">мастер</span></span>
                        <!-- <div class="logo__title"><?php bloginfo('name'); ?></div> -->
                    </a>
                    <div class="logo__desc"><?php bloginfo('description'); ?></div>
                </div>
                <!-- end logo -->
                <div class="contact">
                    <div class="contact__geo"><span>Елабуга</span></div>
                    <div class="contact__phone"><a href="tel:89518988811">8-(951)-898-88-11</a></div>
                </div>
                <!-- end contact -->

                <nav class="mynavigation">
                    <?php wp_nav_menu([
                        'theme_location'  => 'topmenu'
                    ]); ?>
                    <!-- end navigation-list -->

                </nav>
                <!-- end navigation -->
                <div id="nav" class="navigation">
                    <div class="navigation__inner">
                        <div class="mobmynavigation">
                            <?php wp_nav_menu(array(
                                'theme_location'  => 'topmenu',
                                'container' => 'div',
                                'container_class' => 'active',
                            )); ?>
                        </div>
                    </div>
                </div>
                <button id="show">
                    <span class="item"></span>
                    <span class="item"></span>
                    <span class="item"></span>
                </button>





            </header>
            <!-- end header-navigation -->
        </div>
        <!-- end wrap -->
    </div>
    <!-- header-line -->
    <!-- end header block -->
</body>