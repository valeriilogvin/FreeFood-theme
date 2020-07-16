
$('.slick-slider-1, .sect6-slider').slick({
    dots: false,
    infinite: true,
    arrows: false,
    dotsClass: 'my-slick-dots',
    prevArrow: '<button type="button" class="my-slick-prev"><svg class="icon icon-arrow-l"><use xlink:href="#icon-arrow-l"></use></svg></button>',
    nextArrow: '<button type="button" class="my-slick-next"><svg class="icon icon-arrow-r"><use xlink:href="#icon-arrow-r"></use></svg></button>',
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1001,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true
            }
        },
        {
            breakpoint: 641,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true
            }
        }
    ]
});
$('.slick-slider-2').slick({
    dots: false,
    infinite: false,
    arrows: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    dotsClass: 'my-slick-dots',
    prevArrow: '<button type="button" class="my-slick-prev"><svg class="icon icon-arrow-l"><use xlink:href="#icon-arrow-l"></use></svg></button>',
    nextArrow: '<button type="button" class="my-slick-next"><svg class="icon icon-arrow-r"><use xlink:href="#icon-arrow-r"></use></svg></button>',
    responsive: [
        {
            breakpoint: 1001,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 641,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.top-food').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    draggable: false,
    centerMode: false,
    focusOnSelect: true,
    // asNavFor: '.top-food__container',
    responsive: [
        {
            breakpoint: 1001,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                }
        },
        {
            breakpoint: 641,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                // centerMode: true,
                arrows: true,
                prevArrow: '<button type="button" class="my-slick-prev"><svg class="icon icon-arrow-l"><use xlink:href="#icon-arrow-l"></use></svg></button>',
                nextArrow: '<button type="button" class="my-slick-next"><svg class="icon icon-arrow-r"><use xlink:href="#icon-arrow-r"></use></svg></button>'
            }
        }
    ]
});
// При переключении слайдов-целей (top-food)  фокус на рацион
$('.top-food').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  // console.log(nextSlide);

  if(nextSlide == 0 ) {
    $(".food-cards__weight").click();
  }
  if(nextSlide == 1 ) {
    $(".food-cards__fit").click();
  }
  if(nextSlide == 2 ) {
    $(".food-cards__lactose").click();
  }
});
$('.top-food__container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    // adaptiveHeight: true,
    draggable: false,
    accessibility:false,
    fade: true,
    dots:false,
    // asNavFor: '.top-food',
    responsive: [
        {
            breakpoint: 1001,
            settings: {
                swipe:false
            }
        },
        {
            breakpoint: 768,
            settings: {
                swipe:false
            }
        }
    ]
});
$('.food-cards').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.food-cards__container',
    dots: true,
    infinite: false,
    // rtl: true,
    // draggable: false,
    accessibility:false,
    initialSlide:1,
    focusOnSelect: true,
    dotsClass: 'my-slick-dots',
    prevArrow: '<button type="button" class="my-slick-prev"><svg class="icon icon-arrow-l"><use xlink:href="#icon-arrow-l"></use></svg></button>',
    nextArrow: '<button type="button" class="my-slick-next"><svg class="icon icon-arrow-r"><use xlink:href="#icon-arrow-r"></use></svg></button>',
    responsive: [
        {
            breakpoint: 641,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 481,
            settings: {
                slidesToShow: 3,
                centerMode: true,
                centerPadding: '20px',
                dots: false
            }
        }
    ]
});
$('.food-cards').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log(nextSlide);

    // if(nextSlide == 0 ) {
    //     $(".food-cards__weight").click();
    // }
    // if(nextSlide == 1 ) {
    //     $(".food-cards__fit").click();
    // }
    // if(nextSlide == 2 ) {
    //     $(".food-cards__lactose").click();
    // }
});
$('.food-cards__container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    draggable: false,
    adaptiveHeight: true,
    accessibility:false,
    fade: true,
    initialSlide:1,
    dots:false,
    asNavFor: '.food-cards',
    responsive: [
        {
            breakpoint: 1001,
            settings: {
                swipe:false
            }
        },
        {
            breakpoint: 768,
            settings: {
                swipe:false
            }
        }
    ]
});
$('.food-of-the-day3').children('.food-of-the-day__slide__3').remove();
$('.food-of-the-day, .food-of-the-day3').slick({
  infinite: false,
  // lazyLoad: 'ondemand',
  slidesToShow: 3,
  draggable: false,
  dotsClass: 'my-slick-dots',
  prevArrow: '<button type="button" class="my-slick-prev"><svg class="icon icon-arrow-l"><use xlink:href="#icon-arrow-l"></use></svg></button>',
  nextArrow: '<button type="button" class="my-slick-next"><svg class="icon icon-arrow-r"><use xlink:href="#icon-arrow-r"></use></svg></button>',
  dots: true,
  slidesToScroll: 1,
  // autoplay: true,
  responsive: [
    {
      breakpoint: 1001,
      settings: {
        slidesToShow: 2

      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 641,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        // autoplay: true,
        // autoplaySpeed: 4000,
        centerPadding: '80px',
      }
    },
    {
      breakpoint: 480,
      settings: {
          slidesToShow: 1,
          centerMode: true,
          // autoplay: true,
          // autoplaySpeed: 4000,
          dots:false,
          centerPadding: '40px',
      }
    },
    {
      breakpoint: 381,
      settings: {
          slidesToShow: 1,
          centerMode: true,
          // autoplay: true,
          // autoplaySpeed: 4000,
          centerPadding: '30px',
      }
    }
  ]
});
$('.progress-block').children('p, h3, .flex, .price-container, a.button').remove();

$('.sect7-slider').slick({
    infinite: true,
    slidesToShow: 3,
    lazyLoad: 'ondemand',
    draggable: false,
    dotsClass: 'my-slick-dots',
    prevArrow: '<button type="button" class="my-slick-prev"><svg class="icon icon-arrow-l"><use xlink:href="#icon-arrow-l"></use></svg></button>',
    nextArrow: '<button type="button" class="my-slick-next"><svg class="icon icon-arrow-r"><use xlink:href="#icon-arrow-r"></use></svg></button>',
    dots: true,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1001,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                swipe:false,
            }
        },
        {
            breakpoint: 641,
            settings: {
                slidesToShow: 1,
                infinite: true,
                swipe:true,
            }
        }
    ]
});

$('.business').find('.lemon1').text('Перша страва');
$('.business').find('.lemon3').text('Друга страва');
$('.business').find('.lemon5').text('Салат і напій');

$('.business').children('.price-container, p.add-button-style').remove();

$('.button0').children('a').text('Замовити');
$('.button1').children('a').text('Замовлення на 1 день');
$('.button2').children('a').text('Замовлення на 7 днів');
$('.button3').children('a').text('Замовлення на 14 днів');
$('.button4').children('a').text('Замовлення на 28 днів');
$('.button5').children('a').text('Хочу це меню');
// $('.add-button-style-mob').find('del').text('Від');
$('.add-button-style-mob').find('.woocommerce-Price-currencySymbol').text(' грн/день');
$('.zz-cart-wrapper').find('.cart-title').text('Ваш кошик');

$( ".add_to_cart_button" ).click(function() {
    $(".zz-basket").click();
});

// якорные ссылки
$("body").on('click', '[href*="#"]', function(e){
    var fixed_offset = 0;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 500);
    e.preventDefault();
});

if(window.matchMedia('(max-width: 768px)').matches){
    $('.button1').children('a').text('До 7 днів');
    $('.button2').children('a').text('До 14 днів');
    $('.button3').children('a').text('До 28 днів');
    $('.button4').children('a').text('Від 28 днів');
}


// таймер
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}
function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    if (clock === null)
        return;//sm

    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
    function updateClock() {
        var t = getTimeRemaining(endtime);
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}
var deadline="July 15 2020 00:00:01 GMT+0300"; //for Ukraine
initializeClock('countdown', deadline);

(function($) {
  $(function() {
    $("ul.tabs__caption").on("click", "li:not(.active)", function() {
      $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest("div.tabs")
        .find("div.tabs__content")
        .removeClass("active")
        .eq($(this).index())
        .addClass("active");
    });
  });
})(jQuery);

// Вопросы-ответы
$(document).ready(function(){
    $('.pane_header').click(function(){
        if ($(this).parent().children('div.subitem').is(':visible')){
            $('div.subitem').slideUp().siblings('normal');
            $('.pane_header').removeClass("active");
            $('.pane_header').parent().removeClass("active");
        }
        else {
            $('div.subitem').slideUp().siblings('normal');
            $('.pane_header').removeClass("active");
            $('.pane_header').parent().removeClass("active");
            $(this).toggleClass("active");
            $(this).parent().children('div.subitem').slideToggle().siblings('normal');
            $(this).parent().toggleClass("active");
        }
    });
});

// не понятно
$(function() {
  $.fn.select2.amd.require([
      "select2/utils",
      "select2/dropdown",
      "select2/dropdown/attachContainer",
      'select2/dropdown/closeOnSelect'
  ], function (Utils, DropdownAdapter, AttachContainer, closeOnSelect) {
      $('select').select2({
          dropdownAdapter: Utils.Decorate(Utils.Decorate(DropdownAdapter, AttachContainer), closeOnSelect),
          closeOnSelect: true
      });
  });
});

//sm
function smCoupon(){
//	console.log('smCoupon()');
	$('#coupon_code')[0].value = $('#coupon_code_')[0].value;
	$('button')[0].click();
	return false;
}
/*
$( "#apply_coupon_" ).click(function( event ) {
  alert( "Handler for #apply_coupon_ called." );
  event.preventDefault();
	return false;
});
*/

//sm
/*
$( "#apply_coupon_" ).click(function( event ) {
  alert( "Handler for #apply_coupon_ called." );
  event.preventDefault();
	return false;
});
*/

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
    $('.zz-cart-wrapper').append("<div class='zz-load'><img src='/wp-content/themes/twentysixteen-child/img/load.gif'></div>");
    $('.zz-cart-wrapper .cart-title').append('<span class="zz-cart-close"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 172 172" style=" fill:#000000;"><g transform="translate(2.408,2.408) scale(0.972,0.972)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="5" stroke-linejoin="round"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg></span>');
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
            clicktarget.removeClass('active');
            datepickerwrap.removeClass('active');
            datepickerwrap.find('.datepicker-inline').hide('slow');
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
            datepickerwrap.find('.datepicker.active').append('<span class="zz-datepicker-done">Готово</span>');
        }   
    });
    $(document).on( "click", ".zz-datepicker-done", function() {
        var clicktarget = $(this).parents('.zz-datepicker-wrap').siblings('.zz-datepicker');
        clicktarget.click();
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

$(document).ready(function(){
    $(".input-mask-s").inputmask("+38 (999) 999-99-99");
});