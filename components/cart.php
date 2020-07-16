
        <script type="text/javascript">
            function arraysEqual(arr1, arr2) {
                if(arr1.length !== arr2.length)
                    return false;
                for(var i = arr1.length; i--;) {
                    if(arr1[i] != arr2[i])
                        return false;
                }

                return true;
            }
            jQuery(document).ready(function($) {
                var d = new Date();
                d.setDate(d.getDate() + 2);
                $(document).on( "click", ".zz-datepicker, .woocommerce-mini-cart-item mini_cart_item", function() {
                    var clicktarget = $(this),
                        datepickerwrap = $(this).siblings('.zz-datepicker-wrap'),
                        variations = datepickerwrap.siblings('.variation'),
                        inpt_food_dates = datepickerwrap.siblings('input[name="food_dates"]'),
                        qunty = datepickerwrap.siblings('.qnt_blk').find('input[name="quantity"]').val(),
                        jsDates = new Array();
                    datepickerwrap.datepicker({startDate:d, minDate:d, multipleDates: true, inline: false});
                    if(variations.length){
                        datesString = variations.find('dd.variation- p').html();
                        var unfiltered = datesString.split(' ; ');
                        var filtered = unfiltered.filter(Boolean);
                        var jsDates = new Array();
                        for (let value of filtered){
                        var dtstr = new Date((parseInt(value.substr(1)) - (3*60*60)) * 1000);
                            jsDates.push(dtstr);
                        }
                    }
                    var datepickerobj = datepickerwrap.datepicker().data('datepicker');
                    if(datepickerwrap.hasClass('active')){
                        clicktarget.removeClass('active')
                        datepickerwrap.removeClass('active');
                        var temp = datepickerobj.selectedDates;
                        if(!temp.length){
                            datepickerobj.destroy();
                        }else{
                            var datesString = '';
                            for (let value of temp) {
                                // console.log(value);
                                var dtstr = new Date(value);
                                var timestamp = '@' + Math.round((dtstr.getTime()/1000) + (3*60*60));
                                datesString += timestamp + ' ; ';
                            }
                            inpt_food_dates.val(datesString).change();
                        }
                    }else{
                        $(document).mouseup(function (e){ // событие клика по веб-документу
                            var div = $(".datepicker.active"); // тут указываем ID элемента
                            if (!div.is(e.target) // если клик был не по нашему блоку
                                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                                // console.log('miss');
                                // console.log('pass');
                            }
                        });
                        clicktarget.addClass('active')
                        if(jsDates.length && jsDates.length == qunty){
                            datepickerobj.selectDate(jsDates);
                        }else{
                            var datesArr = Array.apply(null, Array(parseInt(qunty))).map(function (x, i) { return i; });
                            var jsDatesArr = new Array();
                            for(var i = 2; i < datesArr.length+2; i++) {
                                var tomorrow = new Date();
                                tomorrow.setDate(tomorrow.getDate() + i);
                                jsDatesArr.push(tomorrow);
                            }
                            datepickerobj.selectDate(jsDatesArr);
                        }
                        datepickerwrap.addClass('active');
                        datepickerobj.show();
                    }
                    
                });

                // show/hide sidebar
                $('.zz-basket').click(function() {
                    if($('.zz-cart-wrapper').css('display') === 'none') {
                        $('.zz-cart-wrapper').stop().show();
                        $('.zz-basket').css('right', '550px');
                        $('.zz-cart-wrapper').addClass('zz-mask');
                        // $('.md-overlay').css('display', 'block');
                        $("body").css("overflow", "hidden");
                    } else {
                        $('.zz-cart-wrapper').stop().hide()
                        $('.zz-basket').css('right', '5px');
                        $('.zz-cart-wrapper').removeClass('zz-mask');
                        // $('.md-overlay').css('display', 'none');
                        $("body").css("overflow", "auto");
                    }
                });
                $('.zz-cart-close,.zz-maskover').click(function() {
                    $('.zz-cart-wrapper').stop().hide()
                    $('.zz-basket').css('right', '5px');
                    $('.zz-cart-wrapper').removeClass('zz-mask');
                    // $('.md-overlay').css('display', 'none');
                    $("body").css("overflow", "auto");
                });
            });
        </script>
        <script type="text/javascript">
            // якорные ссылки
            const anchors = document.querySelectorAll('a[href*="#"]')

            for (let anchor of anchors) {
              anchor.addEventListener('click', function (e) {
                e.preventDefault()
                
                const blockID = anchor.getAttribute('href').substr(1)
                
                document.getElementById(blockID).scrollIntoView({
                  behavior: 'smooth',
                  block: 'start'
                })
              })
            }
        </script>
        <script type="text/javascript">
            (function() {
                'use strict';
                function trackScroll() {
                    var scrolled = window.pageYOffset;
                    var coords = document.documentElement.clientHeight;
                    if (scrolled > coords) {
                        goTopBtn.classList.add('back_to_top-show');
                    }
                    if (scrolled < coords) {
                        goTopBtn.classList.remove('back_to_top-show');
                    }
                }
                function backToTop() {
                    if (window.pageYOffset > 0) {
                        window.scrollBy(0, -80);
                        setTimeout(backToTop, 0);
                    }
                }
                var goTopBtn = document.querySelector('.back_to_top');
                if(goTopBtn === null)
                	return;//sm
                window.addEventListener('scroll', trackScroll);
                goTopBtn.addEventListener('click', backToTop);
            })();
        </script>