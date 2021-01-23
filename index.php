<?
    get_header();
?>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__inner">
                    <div class="header__close">
                        <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.1568 14.5231L28.4489 3.23075C29.1837 2.49623 29.1837 1.30861 28.4489 0.574085C27.7144 -0.160437 26.5267 -0.160437 25.7922 0.574085L14.4998 11.8665L3.20781 0.574085C2.47295 -0.160437 1.28567 -0.160437 0.551149 0.574085C-0.183716 1.30861 -0.183716 2.49623 0.551149 3.23075L11.8432 14.5231L0.551149 25.8155C-0.183716 26.55 -0.183716 27.7376 0.551149 28.4721C0.917206 28.8385 1.39852 29.0226 1.87948 29.0226C2.36045 29.0226 2.84141 28.8385 3.20781 28.4721L14.4998 17.1798L25.7922 28.4721C26.1586 28.8385 26.6396 29.0226 27.1205 29.0226C27.6015 29.0226 28.0825 28.8385 28.4489 28.4721C29.1837 27.7376 29.1837 26.55 28.4489 25.8155L17.1568 14.5231Z" fill="black"/>
                        </svg>
                    </div>
                    <div class="header__logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <nav class="header__nav">
                        <ul class="header__menu">
                            <li class="header__item">
                                <a href="portfolio" class="header__item-link">Портфолио</a>
                            </li>
                            <li class="header__item">
                                <a href="#1sec" class="header__item-link">Главная</a>
                            </li>
                            <li class="header__item">
                                <a href="#2sec" class="header__item-link">О нас</a>
                            </li>
                            <li class="header__item">
                                <a href="#4sec" class="header__item-link">Отделения</a>
                            </li>
                            <li class="header__item">
                                <a href="#3sec" class="header__item-link">Наши врачи</a>
                            </li>
                            <li class="header__item">
                                <a href="#5sec" class="header__item-link">Отзывы</a>
                            </li>
                            <li class="header__item">
                                <a href="#6sec" class="header__item-link">Контакты</a>
                            </li>
                        </ul>
                        <button class="btn" onclick="location.href = '#6sec'">Оставить заявку</button>
                    </nav>
                </div>
                <div class="header__contacts">
                    <a class="header__contacts_link" href="https://wa.me/<?php the_field('wpp_link', 2); ?>" target="_blank"><?php the_field('wpp_num', 2); ?></a>
                    <button class="btn" onclick="location.href = '#6sec'">Оставить заявку</button>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span class="long"></span>
                    <span></span>
                </div>
                <div class="header__overlay"></div>
            </div>
        </div>
    </header>

    <section class="main" id="1sec">
        <div class="container">
            <div class="main__wrapper">
                <div class="main__action_pc">
                    <div class="main__text">
                        <h1 class="main__title fz_85 fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                            <?php the_field('main_title'); ?>
                        </h1>
                        <h3 class="main__subtitle fz_50 fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.75s">
                            <?php the_field('main_title_2'); ?>
                        </h3>
                        <h4 class="main__sign fz_30 fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="1s">
                            <?php the_field('main_title_3'); ?>
                        </h4>
                    </div>
                    <?php 
                        $field = get_field('main_btn');

                        if ($field == 'show') {
                            ?>
                                <button class="btn fadeIn wow" onclick="location.href = '#6sec'" data-wow-duration="1.5s" data-wow-delay="1.5s">Записаться</button>
                            <?php
                        }
                    ?>
                </div>
                <div class="main__img fadeInRightBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="<?php the_field('main_img'); ?>" alt="">
                </div>
                <div class="main__action_mobile">
                        <h1 class="main__title fz_85 fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                            <?php the_field('main_title'); ?>
                        </h1>
                        <h3 class="main__subtitle fz_50 fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.75s">
                            <?php the_field('main_title_2'); ?>
                        </h3>
                        <div class="main__img_mobile fadeInRightBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?php the_field('main_img'); ?>" alt="">
                        </div>
                        <h4 class="main__sign fz_30 fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="1s">
                            <?php the_field('main_title_3'); ?>
                        </h4>
                        <?php 
                            $field = get_field('main_btn');

                            if ($field == 'show') {
                                ?>
                                    <button class="btn fadeIn wow" onclick="location.href = '#6sec'" data-wow-duration="1.5s" data-wow-delay="1.5s">Записаться</button>
                                <?php
                            }
                        ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about" id="2sec">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__text fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2 class="about__title"><?php the_field('about_title'); ?></h2>
                    <div class="about__descr fz_30">
                    <?php the_field('about_subtitle'); ?>
                        <ul class="about__list">
                            <li class="about__list-item"><div class="number">1</div><span><?php the_field('do_1'); ?></span></li>
                            <li class="about__list-item"><div class="number">2</div><span><?php the_field('do_2'); ?></span></li>
                            <li class="about__list-item"><div class="number">3</div><span><?php the_field('do_3'); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="about__progress fadeInRightBig wow" data-wow-duration="1s" data-wow-delay="0.75s">
                    <div class="about__progress-item">
                        <div class="about__progress-item_img">
                            <img src="<?php the_field('about_img'); ?>" alt="">
                        </div>
                        <div class="about__progress-item_title fz_64"><?php the_field('about_img-subtitle'); ?></div>
                    </div>
                </div>
            </div>
            <div class="sec__footer fadeInUp wow" data-wow-duration="1s" data-wow-delay="0.5s">
                <a class="sec__footer_item" href="<?php echo home_url(); ?>/portfolio" target="_blank">Почему клиника?</a>
            </div>
        </div>
    </section>

    <section class="service" id="4sec">
        <div class="container">
            <div class="swiper-container first service__wrapper">
                <div class="swiper-wrapper">
                    <?php 
                        // параметры по умолчанию
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'service_slider',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="service__item swiper-slide fadeInDown wow" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="service__item_inner">
                                        <div class="service__item-text">
                                            <div class="service__item-text_name fz_40">
                                                <?php the_title(); ?>
                                            </div>
                                            <ul>
                                                <li><a class="fz_30" href="<?php echo home_url(); ?>/<?php the_field('tag-link_1'); ?>">- <?php the_field('tag_1'); ?></a></li>
                                                <?php 
                                                    $field_2 = get_field('tag_2');
                                                    if (!$field_2 == '') {
                                                        ?>
                                                        <li><a class="fz_30" href="<?php echo home_url(); ?>/<?php the_field('tag-link_2'); ?>">- <?php the_field('tag_2'); ?></a></li>
                                                        <?php
                                                            $field_3 = get_field('tag_3');
                                                            if (!$field_3 == '') {
                                                                ?>
                                                                <li><a class="fz_30" href="<?php echo home_url(); ?>/<?php the_field('tag-link_3'); ?>">- <?php the_field('tag_3'); ?></a></li>
                                                                <?php
                                                                    $field_4 = get_field('tag_4');
                                                                    if (!$field_4 == '') {
                                                                        ?>
                                                                        <li><a class="fz_30" href="<?php echo home_url(); ?>/<?php the_field('tag-link_4'); ?>">- <?php the_field('tag_4'); ?></a></li>
                                                                        <?php
                                                                            $field_5 = get_field('tag_5');
                                                                            if (!$field_5 == '') {
                                                                                ?>
                                                                                <li><a class="fz_30" href="<?php echo home_url(); ?>/<?php the_field('tag-link_5'); ?>">- <?php the_field('tag_5'); ?></a></li>
                                                                                <?php
                                                                                    $field_6 = get_field('tag_6');
                                                                                    if (!$field_6 == '') {
                                                                                        ?>
                                                                                        <li><a class="fz_30" href="<?php echo home_url(); ?>/<?php the_field('tag-link_6'); ?>">- <?php the_field('tag_6'); ?></a></li>
                                                                                        <?php
                                                                                    }
                                                                            }
                                                                    }
                                                            }
                                                    }
                                                ?>
                                            </ul>
                                            <?php 
                                                $field = get_field('service_btn');

                                                if($field == 'on') {
                                                    ?>  
                                                        <div class="btn" onclick="location.href = '#6sec'">заказать</div>
                                                    <?php
                                                } 
                                            ?>
                                        </div>
                                        <div class="service__item-img mobile">
                                            <div class="service__item-img_circle">
                                                <?php the_field('svg_image'); ?>
                                            </div>
                                            <?php 
                                                $field = get_field('service_btn');

                                                if($field == 'on') {
                                                    ?>
                                                        <div class="btn" onclick="location.href = '#6sec'">заказать</div>
                                                    <?php
                                                } 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <div class="sec__footer fadeInUp wow" data-wow-duration="1s" data-wow-delay="0.5s">
                <a class="sec__footer_item" href="portfolio" target="_blank">Посмотреть все проекты</a>
            </div>
        </div>
    </section>

    <section class="team" id="3sec">
        <div class="container">
            <h2 class="team__title sec_title fadeInDown wow" data-wow-duration="0.5s" data-wow-delay="0.5s">Наша команда врачей экспертов</h2>
            <div class="team__wrapper swiper-container third">
                <div class="swiper-wrapper">
                <?php 
                        // параметры по умолчанию
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'team__slider',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="team__item swiper-slide fadeInDown wow" data-wow-duration="0.9s" data-wow-delay="0.3s">
                                    <div class="team__item-img">
                                        <img src="<?php the_field('team_img'); ?>" alt="">
                                    </div>
                                    <div class="team__item-inner">
                                        <div class="team__item_name fz_30"><?php the_title(); ?></div>
                                        <div class="team__item_descr"><?php the_field('team_position'); ?></div>
                                    </div>
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="recomends" id="5sec">
        <div class="container">
            <div class="recomends__title sec_title fadeInDown wow" data-wow-duration="0.75s" data-wow-delay="0.5s">Отзывы</div>
            <div class="swiper-container second">
                <div class="recomends__wrapper swiper-wrapper fadeInDown wow" data-wow-duration="0.75s" data-wow-delay="0.75s">
                <?php 
                        // параметры по умолчанию
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'reviews',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <?php 
                                    $field = get_field('review_choise');

                                    if($field == 'Picture') {
                                        ?>  
                                            <div class="recomends__item swiper-slide">
                                                <img src="<?php the_field('review_img'); ?>" alt="">
                                            </div>
                                        <?php
                                    } else {
                                        ?>  
                                            <div class="recomends__item swiper-slide">
                                                <video src="<?php the_field('review_video'); ?>" controls></video>
                                            </div>
                                        <?php
                                    }
                                ?>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>


                    <!-- <div class="recomends__item swiper-slide">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_1.jpg" alt="">
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_1.mp4" controls></video>
                    </div>
                    <div class="recomends__item swiper-slide">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_2.jpg" alt="">
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_2.mp4" controls></video>
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_3.mp4" controls></video>
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_4.mp4" controls></video>
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_5.mp4" controls></video>
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_6.mp4" controls></video>
                    </div>
                    <div class="recomends__item swiper-slide">
                        <video src="<?php echo bloginfo('template_url'); ?>/assets/img/recomends/rec_video_7.mp4" controls></video>
                    </div> -->
                </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

<?
    get_footer();
?>