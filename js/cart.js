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