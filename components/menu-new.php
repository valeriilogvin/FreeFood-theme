<section class="sect4" id="sect4">
    <div class="top-food__container">
        <div class="top-food__container-slide">
            <div class="conteiner">
                <!-- food-cards -->
                <!-- food-cards (8 cards) -->
                <div class="food-cards">

                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 20,
                            'post_type' => 'product',
                            'product_tag'       => 'in',
                            'suppress_filters' => true,
                         ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <div class="food-cards__slide food-cards__<?php the_field('menu-sinc'); ?>">
                                <div class="icon" style="background-image: url(<?php the_field('menu-icon'); ?>)"></div>
                                <span class="be-free">be free</span>
                                <h3><?php the_field('menu-name'); ?></h3>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    ?>
                    <?php
                        $posts = get_posts( array(
                            'numberposts'       => 20,
                            'post_type'         => 'product',
                            'product_tag'       => 'progress',
                            'suppress_filters'  => true,
                         ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <div class="food-cards__slide food-cards__<?php the_field('menu-sinc'); ?>">
                                <div class="icon" style="background-image: url(<?php the_field('menu-icon'); ?>)"></div>
                                <span class="be-free">be free</span>
                                <h3><?php the_field('menu-name'); ?></h3>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <!-- food-cards (8 cards) : END -->
                <!-- food-cards__container -->
                <div class="food-cards__container">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 20,
                            'post_type' => 'product',
                            'product_tag'       => 'in',
                            'suppress_filters' => true,
                         ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <div class="food-cards__container__slide <?php the_field('progress-block'); ?> tabs">
                                <h3>Програма харчування «Be free <?php the_field('menu-name'); ?>»</h3>
                                <p class="menu-text"><?php the_field('menu-text'); ?></p>
                                <p class="menu-text-mob display_none"><?php the_field('menu-text_mob'); ?></p>

                                <!-- days-slider -->
                                <div class="flex">

                                    <!--days-slider (days)-->
                                    <ul class="tabs__caption days-tabs">
                                        <li class="active">
                                          <span class="desctop">Понедельник</span>
                                          <span class="mob">ПН</span>
                                        </li>
                                        <li>
                                          <span class="desctop">Вторник</span>
                                          <span class="mob">ВТ</span>
                                        </li>
                                        <li>
                                          <span class="desctop">Среда</span>
                                          <span class="mob">СР</span>
                                        </li>
                                        <li>
                                          <span class="desctop">Четверг</span>
                                          <span class="mob">ЧТ</span>
                                        </li>
                                        <li>
                                          <span class="desctop">Пятница</span>
                                          <span class="mob">ПТ</span>
                                        </li>
                                        <li>
                                          <span class="desctop">Суббота</span>
                                          <span class="mob">СБ</span>
                                        </li>
                                        <li>
                                          <span class="desctop">Воскресенье</span>
                                          <span class="mob">ВС</span>
                                        </li>
                                      </ul>
                                    <!--days-slider (days)-->
                                    <!-- days-slider__container -->
                                    <div class="days-slider__container">
                                        <div class="days-slider__container__slide tabs__content  active">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                
                                                <?php $menumo1 = get_field('menumo1');  
                                                if( $menumo1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menumo1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menumo1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menumo1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menumo2 = get_field('menumo2');  
                                                if( $menumo2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menumo2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menumo2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menumo2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menumo3 = get_field('menumo3');  
                                                if( $menumo3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menumo3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menumo3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menumo3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menumo4 = get_field('menumo4');  
                                                if( $menumo4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menumo4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menumo4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menumo4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menumo5 = get_field('menumo5');  
                                                if( $menumo5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menumo5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menumo5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menumo5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                            </div>
                                            
                                        </div>
                                        <div class="days-slider__container__slide tabs__content">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                <?php $menutu1 = get_field('menutu1');  
                                                if( $menutu1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menutu1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menutu1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menutu1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menutu2 = get_field('menutu2');  
                                                if( $menutu2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menutu2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menutu2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menutu2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menutu3 = get_field('menutu3');  
                                                if( $menutu3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menutu3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menutu3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menutu3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menutu4 = get_field('menutu4');  
                                                if( $menutu4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menutu4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menutu4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menutu4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menutu5 = get_field('menutu5');  
                                                if( $menutu5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menutu5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menutu5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menutu5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                        <div class="days-slider__container__slide tabs__content">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                <?php $menuwe1 = get_field('menuwe1');  
                                                if( $menuwe1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuwe1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuwe1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuwe1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuwe2 = get_field('menuwe2');  
                                                if( $menuwe2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuwe2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuwe2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuwe2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuwe3 = get_field('menuwe3');  
                                                if( $menuwe3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuwe3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuwe3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuwe3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuwe4 = get_field('menuwe4');  
                                                if( $menuwe4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuwe4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuwe4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuwe4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuwe5 = get_field('menuwe5');  
                                                if( $menuwe5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuwe5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuwe5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuwe5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                        <div class="days-slider__container__slide tabs__content">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                <?php $menuth1 = get_field('menuth1');  
                                                if( $menuth1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuth1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuth1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuth1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuth2 = get_field('menuth2');  
                                                if( $menuth2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuth2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuth2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuth2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuth3 = get_field('menuth3');  
                                                if( $menuth3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuth3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuth3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuth3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuth4 = get_field('menuth4');  
                                                if( $menuth4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuth4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuth4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuth4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menuth5 = get_field('menuth5');  
                                                if( $menuth5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menuth5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menuth5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menuth5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                        <div class="days-slider__container__slide tabs__content">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                <?php $menufr1 = get_field('menufr1');  
                                                if( $menufr1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menufr1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menufr1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menufr1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menufr2 = get_field('menufr2');  
                                                if( $menufr2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menufr2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menufr2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menufr2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menufr3 = get_field('menufr3');  
                                                if( $menufr3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menufr3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menufr3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menufr3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menufr4 = get_field('menufr4');  
                                                if( $menufr4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menufr4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menufr4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menufr4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menufr5 = get_field('menufr5');  
                                                if( $menufr5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menufr5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menufr5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menufr5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                        <div class="days-slider__container__slide tabs__content">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                <?php $menusut1 = get_field('menusut1');  
                                                if( $menusut1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusut1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusut1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusut1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusut2 = get_field('menusut2');  
                                                if( $menusut2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusut2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusut2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusut2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusut3 = get_field('menusut3');  
                                                if( $menusut3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusut3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusut3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusut3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusut4 = get_field('menusut4');  
                                                if( $menusut4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusut4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusut4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusut4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusut5 = get_field('menusut5');  
                                                if( $menusut5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusut5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusut5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusut5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                        <div class="days-slider__container__slide tabs__content">
                                            <div class="food-of-the-day<?php the_field('menu-cart3'); ?>">
                                                <?php $menusun1 = get_field('menusun1');  
                                                if( $menusun1 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusun1['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon1">Сніданок</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusun1['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusun1['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusun2 = get_field('menusun2');  
                                                if( $menusun2 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusun2['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusun2['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusun2['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusun3 = get_field('menusun3');  
                                                if( $menusun3 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusun3['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon3">Обід</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusun3['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusun3['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusun4 = get_field('menusun4');  
                                                if( $menusun4 ): ?>
                                                <div class="food-of-the-day__slide food-of-the-day__slide__3">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusun4['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon">Перекус</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusun4['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusun4['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <?php $menusun5 = get_field('menusun5');  
                                                if( $menusun5 ): ?>
                                                <div class="food-of-the-day__slide">
                                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() ?>/img/menu-img/<?php the_field('menu-folder'); ?>/<?php echo $menusun5['menu-photo']; ?>.jpg" alt="">
                                                    <span class="lemon lemon5">Вечеря</span>
                                                    <div class="day__slide-title">
                                                        <p><?php echo $menusun5['menu-title']; ?></p>
                                                    </div>
                                                    <span><?php echo $menusun5['menu-text']; ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- days-slider__container : END -->
                                </div>
                                <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'" style="border:none" show_price="true" class="add-button-style add-button-style-mob button0" quantity="1"]'); ?>
                                <div class="price-container">
                                    <div class="menu-prise">
                                        <div class="menu-prise__slide">
                                            <div class="flex">
                                                <div class="price-cards">
                                                    <!-- <h3>Заказ на 1 день</h3> -->
                                                    <h4><?php the_field('price1'); ?><br /><span> грн / день</span></h4>
                                                    <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" class="add-button-style button1" quantity="1"]'); ?>
                                                </div>
                                                <div class="price-cards">
                                                    <!-- <h3>Заказ на 6 дней</h3> -->
                                                    <h4><?php the_field('price2'); ?><br /><span> грн / день</span></h4>
                                                    <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" class="add-button-style button2" quantity="7"]'); ?>
                                                </div>
                                                <div class="price-cards">
                                                    <!-- <h3>Заказ на 12 дней</h3> -->
                                                    <h4><?php the_field('price3'); ?><br /><span> грн / день</span></h4>
                                                    <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" class="add-button-style button3" quantity="14"]'); ?>
                                                </div>
                                                <div class="price-cards">
                                                    <!-- <h3>Заказ на 24 дня</h3> -->
                                                    <h4><?php the_field('price4'); ?><br /><span> грн / день</span></h4>
                                                    <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" class="add-button-style button4" quantity="28"]'); ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'" style="border:none" show_price="false" class="add-button-style button5" quantity="1"]'); ?>
                                <!-- days-slider -->
                                <div class="business-text">
                                    <p>Замовлення ланчів здійснюється за телефоном щодня до 18:00 на наступний день. <br />
                                        Безкоштовна доставка по МегаСіті. <br />
                                        При замовленні від одного тижня, економія 10 гривень на кожному ланчі
                                    </p>
                                    <a data-modal="modal-2" class="md-trigger button-business">Замовити</a>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    ?>
                    <?php
                        $posts = get_posts( array(
                            'numberposts'       => 20,
                            'post_type'         => 'product',
                            'product_tag'       => 'progress',
                            'suppress_filters'  => true,
                         ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <div class="food-cards__slide progress__block">
                                <h4 class="progress-text">In progress</h2>
                                <img src="<?php the_field('menu-icon2'); ?>" style="margin:0 auto;">
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    ?>                 
                </div>
                <!-- food-cards__container : END -->
                <!-- food-cards : END -->
            </div>
        </div>
    </div>
</section>