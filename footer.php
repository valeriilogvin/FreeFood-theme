<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
 <div class="footer">
            <div class="conteiner">
                <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
                <p style="color: #91b63d;">Свобода харчуватися правильно</p>
                <div class="flex">
                    <div class="left">
                        <a href="tel:<?php the_field('tel1', 779); ?>" class="tel"><svg class="icon icon-tel"><use xlink:href="#icon-tel"></use></svg><?php the_field('tel1', 779); ?></a>
                        <a href="mailto:<?php the_field('email', 779); ?>" class="mail"><svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg><?php the_field('email', 779); ?></a>
                    </div>
                    <div class="social">
                        <p>Слідкуйте за нами <br /> в соц мережах:</p>
                        <div class="links">
                            <a target="_blank" href="<?php the_field('facebook', 779); ?>" class="fb"><svg class="icon icon-fb"><use xlink:href="#icon-fb"></use></svg></a>
                            <a target="_blank" href="<?php the_field('instagram', 779); ?>" class="inst"><svg class="icon icon-inst"><use xlink:href="#icon-inst"></use></svg></a>
                            <a href="<?php the_field('telegram', 779); ?>" class="tg"><svg class="icon icon-tg"><use xlink:href="#icon-tg"></use></svg></a>
                            <a href="<?php the_field('viber', 779); ?>" class="viber"><svg class="icon icon-viber"><use xlink:href="#icon-viber"></use></svg></a>
                        </div>
                    </div>
                    <div class="pay">
                        <p>Сплачуйте <br /> замовлення онлайн</p>
                        <div class="img">
                            <svg class="icon icon-visa"><use xlink:href="#icon-visa"></use></svg>
                            <svg class="icon icon-mc"><use xlink:href="#icon-mc"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="copyriing">
                    <a href="https://freefood.com.ua/privacy-policy/" target="_blank" class="politic" style="padding-bottom: 5px;">Політика конфіденційності</a> <br />
                    <a href="https://freefood.com.ua/oferta/" target="_blank" class="politic">Договір публічної оферти</a>
                    <p>
                        Фотографії страв на сайті є варіантом сервірування страви. <br />
                        Зовнішній вигляд страви може відрізнятися від фотографії на сайті.
                        <br/> <br/>
                        © 2020 FreeFood - безглютеновая доставка здорового харчування
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--md-modal-->
    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <button class="md-close"><span></span><span></span></button>
            <h3>У ВАС Є ПИТАННЯ?</h3>
            <p>Залиште свій номер телефону
                 і ми з вами зв'яжемося</p>
            <div role="form" class="form">
                <?php echo do_shortcode( '[contact-form-7 id="1119" title="Форма обратной связи"]' ); ?>
            </div>
            <p>
                Ми в месенджерах
            </p>
            <div class="soc">
                <a href="<?php the_field('telegram', 779); ?>"><svg class="icon icon-tg"><use xlink:href="#icon-tg"></use></svg></a>
                <a href="<?php the_field('viber', 779); ?>"><svg class="icon icon-viber"><use xlink:href="#icon-viber"></use></svg></a>
                <a href="mailto:food@freefood.com"><svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg></a>
            </div>
        </div>
    </div>
    <!--md-modal:end-->
    <!--md-modal 2-->
    <div class="md-modal md-effect-1" id="modal-2">
        <div class="md-content">
            <button class="md-close"><span></span><span></span></button>
            <h3>У ВАС Є ПИТАННЯ?</h3>
            <p>Залиште свій номер телефону
                 і ми з вами зв'яжемося</p>
            <div role="form" class="form">
                <?php echo do_shortcode( '[contact-form-7 id="1162" title="Заказ ланчей"]' ); ?>
            </div>
            <p>
                Ми в месенджерах
            </p>
            <div class="soc">
                <a href="<?php the_field('telegram', 779); ?>"><svg class="icon icon-tg"><use xlink:href="#icon-tg"></use></svg></a>
                <a href="<?php the_field('viber', 779); ?>"><svg class="icon icon-viber"><use xlink:href="#icon-viber"></use></svg></a>
                <a href="mailto:food@freefood.com"><svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg></a>
            </div>
        </div>
    </div>
    <!--md-modal 2:end-->
</body>
<div class="md-overlay"></div>
<?php wp_footer(); ?>     
</html>