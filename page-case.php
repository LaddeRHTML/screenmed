<?php
    /* 
        Template Name: Портфолио
        Template Post Type: post, case
    */
?>
<?php
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
                                <a href="<?php echo home_url(); ?>" class="header__item-link">Главная</a>
                            </li>
                            <li class="header__item">
                                <a href="<?php echo home_url(); ?>/portfolio" class="header__item-link">Портфолио</a>
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

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
        <section class="case">
        <div class="case__header" style="background: url(<?php the_field('portfolio_img_main'); ?>) center / cover no-repeat;">
            <div class="case__header-logo">
                <img src="<?php the_field('portfolio_img_logo'); ?>" alt="">
            </div>
        </div>
        <div class="case__wrapper">
            <div class="case__content container">
                <div class="case__content-item fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="case__content-item_title fz_30">
                        Кратко о клиенте:
                    </div>
                    <div class="case__content-item_descr">
                        <?php the_field('portfolio_about');?>
                    </div>
                </div>
                <div class="case__content-item fadeInRightBig wow" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="case__content-item_title fz_30">
                        Задача:
                    </div>
                    <div class="case__content-item_descr">
                        <?php the_field('portfolio_goal');?>
                    </div>
                </div>
            </div>
            <?php
                $field = get_field('portfolio_img_2');
                if(!$field == '') {
                    ?>
                        <div class="case__image">
                            <img src="<?php the_field('portfolio_img_2'); ?>" alt="">
                        </div>
                    <?php
                }
            ?>

            <?php
                $field = get_field('portfolio_goal_1');

                if(!$field == '') {
                    ?>
                        <div class="case__content container">
                            <div class="case__content-item fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="case__content-item_title fz_30">
                                    Задача:
                                </div>
                                <div class="case__content-item_descr">
                                    <?php the_field('portfolio_goal_1'); ?>
                                </div>
                            </div>
                            <div class="case__content-item fadeInRightBig wow" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="case__content-item_title fz_30">
                                    Решение:
                                </div>
                                <div class="case__content-item_descr">
                                    <?php the_field('portfolio_key_1'); ?>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
            <?php
                $field = get_field('portfolio_img_3');
                if(!$field == '') {
                    ?>
                        <div class="case__image">
                            <img src="<?php the_field('portfolio_img_3'); ?>" alt="">
                        </div>
                    <?php
                }
            ?>
            <?php
                $field = get_field('portfolio_goal_2');

                if(!$field == '') {
                    ?>
                        <div class="case__content container">
                            <div class="case__content-item fadeInLeftBig wow" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="case__content-item_title fz_30">
                                    Задача:
                                </div>
                                <div class="case__content-item_descr">
                                    <?php the_field('portfolio_goal_2'); ?>
                                </div>
                            </div>
                            <div class="case__content-item fadeInRightBig wow" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="case__content-item_title fz_30">
                                    Решение:
                                </div>
                                <div class="case__content-item_descr">
                                    <?php the_field('portfolio_key_2'); ?>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
        <button class="btn" onclick="location.href = '#6sec'">Хочу такой же</button>
    </section>
	</main><!-- #main -->


    <section class="portfolio">
        <div class="portfolio__wrapper">
            <?php 
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => 3,
                    'category_name'    => 'portfolio',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <?php 
                            $field = get_field('case_color');

                            if($field == 'white') {
                                ?>  
                                    <a class="portfolio__item card" href="<?php echo get_permalink();?>">
                                        <div class="portfolio__item-content card__inner white">
                                            <div class="card__head"><?php the_field('case_name'); ?></div>
                                            <div class="card__title"><?php the_field('case_text'); ?></div>
                                            <div class="card__content"></div>
                                        </div>
                                        <?php 
                                            $field = get_field('case_bg-choice');
                                            if ($field == 'picture') {
                                                ?> 
                                                    <img class="card__bg" src="<?php the_field('case_bg-img'); ?>" alt="" >
                                                <?php
                                            } else {
                                                ?>
                                                    <video class="card__bg" src="<?php the_field('case_bg-video'); ?>" loading='lazy' loop playsinline muted></video>
                                                <?php
                                            }
                                        ?>
                                    </a>
                                <?php
                            } else {
                                ?>  
                                    <a class="portfolio__item card" href="<?php echo get_permalink();?>">
                                        <div class="portfolio__item-content card__inner dark">
                                            <div class="card__head"><?php the_field('case_name'); ?></div>
                                            <div class="card__title"><?php the_field('case_text'); ?></div>
                                            <div class="card__content"></div>
                                        </div>
                                        <?php 
                                            $field = get_field('case_bg-choice');
                                            if ($field == 'picture') {
                                                ?> 
                                                    <img class="card__bg" src="<?php the_field('case_bg-img'); ?>" alt="" >
                                                <?php
                                            } else {
                                                ?>
                                                    <video class="card__bg" src="<?php the_field('case_bg-video'); ?>" loading='lazy' loop playsinline muted></video>
                                                <?php
                                            }
                                        ?>
                                    </a>
                                <?php
                            }
                        ?>
                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>

        </div>
    </section>
<?php
get_footer();
