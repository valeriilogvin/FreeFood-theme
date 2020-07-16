<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


get_header(); ?>
    <div class="wrapper wrapper-main">
        <a class="back_to_top" title="Наверх"><svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg></a>
        <!--pushy-->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content flex">
                <a class="close menu-btn"><span></span><span></span></a>
                <ul>
                    <li><a href="#sect2"><?php the_field('menu1'); ?></a></li>
                    <li><a href="#sect4"><?php the_field('menu2'); ?></a></li>
                    <li><a href="#sect7"><?php the_field('menu3'); ?></a></li>
                    <li><a href="#sect8"><?php the_field('menu4'); ?></a></li>
                </ul>
                <div class="phone">
                    <a href="tel:<?php the_field('tel1'); ?>"><?php the_field('tel1'); ?></a>
                    <a href="tel:<?php the_field('tel2'); ?>"><?php the_field('tel2'); ?></a>
                </div>
            </div>

        </nav>
        <div class="site-overlay"></div>
        <!--pushy:end-->
        <section class="sect1">
            <div class="conteiner">
                <div class="header flex">

                    <!--pushy-menu-btn-->
                    <button class="menu-btn display_none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <ul class="left-menu">
                        <li><a href="#sect2"><?php the_field('menu1'); ?></a></li>
                        <li><a href="#sect4"><?php the_field('menu2'); ?></a></li>
                        <li><a href="#sect7"><?php the_field('menu3'); ?></a></li>
                    </ul>
                    <a class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
                    <ul class="right-menu">
                        <li><a href="#sect8"><?php the_field('menu4'); ?></a></li>
                        <li><a data-modal="modal-1" class="md-trigger profile"><span class="icon"><svg class="icon icon-tel"><use xlink:href="#icon-tel"></use></svg></span><?php the_field('recall'); ?></a></li>
                    </ul>
                    <div class="phone">
                        <a data-modal="modal-1" href="#" class="md-trigger mob tel display_none"></a>
                        <a href="tel:<?php the_field('tel1'); ?>"><?php the_field('tel1'); ?></a>
                        <a href="tel:<?php the_field('tel2'); ?>"><?php the_field('tel2'); ?></a>
                    </div>

                </div>
                <div class="sect1__title">
                    <h3><?php the_field('block1-1'); ?></h3>
                    <h2><?php the_field('block1-2'); ?></h2>
                    <h1><?php the_field('block1-3'); ?></h1>
                    <h4><?php the_field('block1-4'); ?></h4>
                </div>
                <div class="sect1__bg-img">
                    <img class="sect1__img-left" src="<?php echo get_stylesheet_directory_uri() ?>/img/sect1-l.png" alt="">
                    <img class="sect1__img-right"  src="<?php echo get_stylesheet_directory_uri() ?>/img/sect1-r.png" alt="">
                    <img class="sect1__shadow-left" src="<?php echo get_stylesheet_directory_uri() ?>/img/shadow.png" alt="" >
                    <img class="sect1__shadow-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/shadow.png" alt="" >
                </div>
                <a href="#sect4" class="button button-do">ДО РАЦІОНІВ</a>
                <div class="timer">
                   <h1 class="countdown-title">Знижки до 10% до кінця літа</h1>
<!--                    <div id="countdown" class="countdown">-->
<!--                      <div class="countdown-number">-->
<!--                        <span class="days countdown-time"></span>-->
<!--                        <span class="countdown-text">Днів</span>-->
<!--                      </div>-->
<!--                      <div class="countdown-number">-->
<!--                        <span class="hours countdown-time"></span>-->
<!--                        <span class="countdown-text">Годин</span>-->
<!--                      </div>-->
<!--                      <div class="countdown-number">-->
<!--                        <span class="minutes countdown-time"></span>-->
<!--                        <span class="countdown-text">Хвилин</span>-->
<!--                      </div>-->
<!--                      <div class="countdown-number">-->
<!--                        <span class="seconds countdown-time"></span>-->
<!--                        <span class="countdown-text">Секунд</span>-->
<!--                      </div>-->
<!--                    </div>-->
                </div>
                <div class="sect1__card-block">
                    <div class="flex slick-slider-1">

                        <?php $cart1 = get_field('cart1');  

                        if( $cart1 ): ?>
                        <a href="#sect4" class="block-item block-item1">
                            <div class="photo photo1"></div>
                            <h4><?php echo $cart1['title']; ?></h4>
                            <p><?php echo $cart1['text']; ?></p>
                        </a>
                        <?php endif; ?>

                        <?php $cart2 = get_field('cart2');  

                        if( $cart2 ): ?>
                        <a href="#sect4" class="block-item block-item2">
                            <div class="photo photo2"></div>
                            <h4><?php echo $cart2['title']; ?></h4>
                            <p><?php echo $cart2['text']; ?></p>
                        </a>
                        <?php endif; ?>

                        <?php $cart3 = get_field('cart3');  

                        if( $cart3 ): ?>
                        <a href="#sect4" class="block-item block-item3">
                            <div class="photo photo3"></div>
                            <h4><?php echo $cart3['title']; ?></h4>
                            <p><?php echo $cart3['text']; ?></p>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="sect2" id="sect2">
            <div class="conteiner">
                <h2><?php the_field('block2-title'); ?></h2>
                <div class="slick-slider-2">

                    <?php $block2cart1 = get_field('block2cart1');  
                    if( $block2cart1 ): ?>
                    <div class="slider-item">
                        <div class="img">
                            <img data-lazy="<?php echo $block2cart1['img']; ?>" alt="">
                        </div>
                        <h5><?php echo $block2cart1['title']; ?></h5>
                        <p><?php echo $block2cart1['p1']; ?></p>
                        <p><?php echo $block2cart1['p2']; ?></p>
                    </div>
                    <?php endif; ?>

                    <?php $block2cart2 = get_field('block2cart2');  
                    if( $block2cart2 ): ?>
                    <div class="slider-item">
                        <div class="img">
                            <img data-lazy="<?php echo $block2cart2['img']; ?>" alt="">
                        </div>
                        <h5><?php echo $block2cart2['title']; ?></h5>
                        <p><?php echo $block2cart2['p1']; ?></p>
                        <p><?php echo $block2cart2['p2']; ?></p>
                    </div>
                    <?php endif; ?>

                    <?php $block2cart3 = get_field('block2cart3');  
                    if( $block2cart3 ): ?>
                    <div class="slider-item">
                        <div class="img">
                            <img data-lazy="<?php echo $block2cart3['img']; ?>" alt="">
                        </div>
                        <h5><?php echo $block2cart3['title']; ?></h5>
                        <p><?php echo $block2cart3['p1']; ?></p>
                        <p><?php echo $block2cart3['p2']; ?></p>
                    </div>
                    <?php endif; ?>

                    <?php $block2cart4 = get_field('block2cart4');  
                    if( $block2cart4 ): ?>
                    <div class="slider-item">
                        <div class="img">
                            <img data-lazy="<?php echo $block2cart4['img']; ?>" alt="">
                        </div>
                        <h5><?php echo $block2cart4['title']; ?></h5>
                        <p><?php echo $block2cart4['p1']; ?></p>
                        <p><?php echo $block2cart4['p2']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="sect3" >
            <!-- top-food (3 cards) -->
            <div class="conteiner">
                <h2><?php the_field('block3-title'); ?></h2>
                <div id="sect3-top-food" class="top-food ">

                    <!-- top-food__slide1 -->
                    <?php $block3cart1 = get_field('block3cart1');  
                    if( $block3cart1 ): ?>
                    <div class="top-food__item top-food__slide1 top-food__weight">
                        <h4><?php echo $block3cart1['block3cart-title']; ?></h4>
                        <h5><?php echo $block3cart2['block3cart-title2']; ?></h5>
                        <p><?php echo $block3cart1['block3cart-text']; ?></p>
                        <a href="javascript:void(0)" class="button">Обрати</a>
                        <div class="people people1"></div>
                    </div>
                    <?php endif; ?>
                    <!-- top-food__slide1 : END -->

                    <!-- top-food__slide2 -->
                    <?php $block3cart2 = get_field('block3cart2');  
                    if( $block3cart2 ): ?>
                    <div class="top-food__item top-food__slide2 top-food__fit">
                        <h4><?php echo $block3cart2['block3cart-title']; ?></h4>
                        <h5><?php echo $block3cart2['block3cart-title2']; ?></h5>
                        <p><?php echo $block3cart2['block3cart-text']; ?></p>
                        <a href="javascript:void(0)" class="button">Обрати</a>
                        <div class="people people2"></div>
                    </div>
                    <?php endif; ?>
                    <!-- top-food__slide2 :END -->

                    <!-- top-food__slide3 -->
                    <?php $block3cart3 = get_field('block3cart3');  
                    if( $block3cart3 ): ?>
                    <div class="top-food__item top-food__slide3 top-food__lactose">
                        <h4><?php echo $block3cart3['block3cart-title']; ?></h4>
                        <h5><?php echo $block3cart2['block3cart-title2']; ?></h5>
                        <p class="have-span"><?php echo $block3cart3['block3cart-text']; ?></p>
                        <a href="javascript:void(0)" class="button">Обрати</a>
                        <div class="people people3"></div>
                    </div>
                    <?php endif; ?>
                    <!-- top-food__slide3 : END -->
                </div>
            </div>
            <!-- top-food (3 cards) : END -->
        </section>
        
        <?php 
            get_template_part( 'components/menu-new' ); 
        ?>
      
        <section class="sect6">
            <div class="conteiner">
                <h2><?php the_field('block6-title'); ?></h2>
                <div class="sect6-slider">
                    <?php $block6cart1 = get_field('block6cart1');  
                        if( $block6cart1 ): ?>
                         <div class="sect6-slider__slide" style="background-image: url(<?php echo $block6cart1['img']; ?>">
                            <h4><?php echo $block6cart1['title']; ?></h4>
                            <div class="bottom">
                                <div class="price">
                                    <span class="old"><?php echo $block6cart1['price-old']; ?></span>
                                    <span class="new"><?php echo $block6cart1['price']; ?></span>
                                </div>
                                <a data-modal="modal-1" class="md-trigger button">Замовити</a>
                            </div>
                        </div>
                    <?php endif; ?>
                   
                    <?php $block6cart2 = get_field('block6cart2');  
                        if( $block6cart2 ): ?>
                         <div class="sect6-slider__slide" style="background-image: url(<?php echo $block6cart2['img']; ?>">
                            <h4><?php echo $block6cart2['title']; ?></h4>
                            <div class="bottom">
                                <div class="price">
                                    <span class="old"><?php echo $block6cart2['price-old']; ?></span>
                                    <span class="new"><?php echo $block6cart2['price']; ?></span>
                                </div>
                                <a data-modal="modal-1" class="md-trigger button">Замовити</a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php $block6cart3 = get_field('block6cart3');  
                        if( $block6cart3 ): ?>
                         <div class="sect6-slider__slide" style="background-image: url(<?php echo $block6cart3['img']; ?>">
                            <h4><?php echo $block6cart3['title']; ?></h4>
                            <div class="bottom">
                                <div class="price">
                                    <span class="old"><?php echo $block6cart3['price-old']; ?></span>
                                    <span class="new"><?php echo $block6cart3['price']; ?></span>
                                </div>
                                <a data-modal="modal-1" class="md-trigger button">Замовити</a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
        <section class="sect7" id="sect7">
            <div class="conteiner">
                <h2>
                    Be free <span>to comment</span>
                </h2>
                <div class="sect7-slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 25,
                            'post_type'   => 'instagram',
                            'suppress_filters' => true, 
                         ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a target="_blank" href="<?php the_field('link'); ?>" class="sect7-slide">
                                <img data-lazy="<?php the_field('photo'); ?>" alt="">
                            </a>
                        <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
        <section class="sect8" id="sect8">
            <h2>Постійні питання</h2>
            <div class="conteiner">
                <div class="faq-container">
                    <div class="faq-block">
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => 25,
                                'post_type'   => 'faq',
                                'order'       => 'ASC',
                                'suppress_filters' => true, 
                             ));
                            foreach( $posts as $post ){ setup_postdata($post);
                                ?>
                                <div >
                                    <div class="pane_header"><?php the_field('question'); ?></div>
                                    <div class="subitem"><?php the_field('answer'); ?></div>
                                </div>
                            <?php
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="zz-basket">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M501.333,192h-87.47L314.375,47.292c-3.336-4.854-9.977-6.085-14.831-2.749L281.96,56.628c-4.855,3.337-6.086,9.978-2.749,14.833L362.082,192H149.918l82.871-120.539c3.337-4.855,2.107-11.496-2.749-14.833l-17.585-12.085c-4.854-3.336-11.495-2.105-14.831,2.749L98.137,192h-87.47C4.776,192,0,196.775,0,202.667V224c0,5.891,4.776,10.667,10.667,10.667h13.533l65.207,204.938c5.667,17.781,22,29.729,40.656,29.729h251.875c18.656,0,34.99-11.948,40.656-29.74l65.206-204.927h13.534c5.891,0,10.667-4.776,10.667-10.667v-21.333C512,196.775,507.224,192,501.333,192z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>



            <?php global $woocommerce; ?>
                <span class="basket-btn__counter"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
        </div>
            <?php if ( is_active_sidebar( 'cart-sidebar' ) ) : ?>
                    <div id="cart-sidebar" class="primary-sidebar widget-area" role="complementary" style="display: block;">
                        <?php dynamic_sidebar( 'cart-sidebar' ); ?>
                    </div>
            <?php endif; ?>
            
        <?php get_footer(); ?>