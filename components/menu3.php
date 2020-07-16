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
      <div class="food-cards__container__slide tabs">
        <h3>Программа питания «Be free of weight detox»</h3>
        <p>Трехразовое питание на 1000 ккал/день</p>

        <div class="flex ">
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
          <!--days-slider (days) : END-->
        <!-- days-slider__container -->
        <div class="days-slider__container">
          <div class="days-slider__container__slide tabs__content  active">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>
          <div class="days-slider__container__slide tabs__content ">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Вторник
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>

          <div class="days-slider__container__slide tabs__content ">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Среда
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Вторник
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>
          <div class="days-slider__container__slide tabs__content ">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Четверг
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Вторник
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>
          <div class="days-slider__container__slide tabs__content ">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Пятница
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Вторник
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>
          <div class="days-slider__container__slide tabs__content ">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Суббота
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Вторник
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>
          <div class="days-slider__container__slide tabs__content ">
            <div class="food-of-the-day">
              <div class="food-of-the-day__slide food-of-the-day__slide1">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Завтрак</span>
                <p>
                  Вокресенье
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Перекус</span>
                <p>
                  Запеканка с малиной <br />
                  и ягодным соусом
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-3.png" alt="">
                <span class="lemon">Обед</span>
                <p>
                  Паста с курицей <br />
                  и ананасами
                </p>
                <span>300г / 294ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-1.png" alt="">
                <span class="lemon">Полудник</span>
                <p>
                  Фриттата <br />
                  с грибами и соусом
                </p>
                <span>100г / 94ккал</span>
              </div>
              <div class="food-of-the-day__slide">
                <img data-lazy="img/slider4-2.png" alt="">
                <span class="lemon">Ужин</span>
                <p>
                  Вторник
                </p>
                <span>300г / 294ккал</span>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- days-slider__container : END -->
      </div>
    </div>
                <!-- food-cards__container : END -->
                <!-- food-cards : END -->
            </div>
        </div>
    </div>
</section>