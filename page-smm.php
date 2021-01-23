<?php
    /* 
        Template Name: SMM
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
    
    <section class="hat">
        <div class="container">
        <?php 
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'hat_portfolio',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="hat__wrapper">
                            <div class="hat__title"><?php the_field('hat_name'); ?></div>
                            <div class="hat__contacts">
                                <a href="tel:<?php the_field('hat_number-link'); ?>"><?php the_field('hat_number'); ?></a>
                                <a href="mailto:<?php the_field('hat_mail'); ?>"><?php the_field('hat_mail'); ?></a>
                            </div>
                        </div>
                        <div class="tags">
                            <div class="tags__wrapper">
                            <?php 
                                $field = get_field('hat_tag-1');
                                if (!$field == '') {
                                    ?>
                                        <a class="tags__item" href="<?php echo home_url();?>/<?php echo $field['hat_tag-link-1']; ?>/"><?php echo $field['hat_tag-name-1']; ?></a>
                                    <?php
                                } 
                            ?>
                            <?php 
                                $field = get_field('hat_tag-2');
                                if (!$field == '') {
                                    ?>
                                        <a class="tags__item" href="<?php echo home_url();?>/<?php echo $field['hat_tag-link-2']; ?>/"><?php echo $field['hat_tag-name-2']; ?></a>
                                    <?php
                                } 
                            ?>
                            <?php 
                                $field = get_field('hat_tag-3');
                                if (!$field == '') {
                                    ?>
                                        <a class="tags__item" href="<?php echo home_url();?>/<?php echo $field['hat_tag-link-3']; ?>/"><?php echo $field['hat_tag-name-3']; ?></a>
                                    <?php
                                } 
                            ?>
                            <?php 
                                $field = get_field('hat_tag-4');
                                if (!$field == '') {
                                    ?>
                                        <a class="tags__item" href="<?php echo home_url();?>/<?php echo $field['hat_tag-link-4']; ?>/"><?php echo $field['hat_tag-name-4']; ?></a>
                                    <?php
                                } 
                            ?>
                            <?php 
                                $field = get_field('hat_tag-5');
                                if (!$field == '') {
                                    ?>
                                        <a class="tags__item" href="<?php echo home_url();?>/<?php echo $field['hat_tag-link-5']; ?>/"><?php echo $field['hat_tag-name-5']; ?></a>
                                    <?php
                                } 
                            ?>
                            <?php 
                                $field = get_field('hat_tag-6');
                                if (!$field == '') {
                                    ?>
                                        <a class="tags__item" href="<?php echo home_url();?>/<?php echo $field['hat_tag-link-6']; ?>/"><?php echo $field['hat_tag-name-6']; ?></a>
                                    <?php
                                } 
                            ?>
                            <?php 
                                if($_SERVER['REQUEST_URI'] != '/portfolio/')  {
                                    ?>  
                                        <a class="tags__item" href="<?php echo home_url();?>/portfolio/">Все</a>
                                    <?php
                                }
                            ?>
                            </div>
                        </div>


                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>


        </div>
    </section>

    <section class="portfolio">
        <div class="portfolio__wrapper">
            <?php 
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'smm',
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
?>