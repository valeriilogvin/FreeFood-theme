<?php

remove_action ('wp_head','rsd_link');
remove_action ('wp_head','wlwmanifest_link');
remove_action ('wp_head','wp_generator');

/**
 * Shortcode
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Deregister JQery
 */
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}

/**
 * Enqueue scripts and styles.
 */
function twentysixteen_child_scripts() {
$parent_style = 'parent-style';
	wp_enqueue_style(
		'foods-libsStyle',
    	get_stylesheet_directory_uri() . '/css/libs.min.css',
    	array(),
    	'4.0'
    );
	wp_enqueue_style(
		'foods-slickTheme',
		get_stylesheet_directory_uri() . '/slick/slick-theme.css',
		array(),
		'4.0'
	);
	wp_enqueue_style(
		'foods-slick',
		get_stylesheet_directory_uri() . '/slick/slick.css',
		array(),
		'4.0'
	);
	wp_enqueue_style('main_style',
		get_stylesheet_directory_uri() . '/css/main.css',
		array(),
		'2.0'
	);
	wp_enqueue_script(
		'foods-slick',
		get_stylesheet_directory_uri() . '/slick/slick.min.js',
		array(),
		'4.0',
		true
	);
	wp_enqueue_script(
		'foods-libsJs',
		get_stylesheet_directory_uri() . '/js/libs.min.js',
		array(),
		'4.0',
		true
	);
	wp_enqueue_script(
		'foods-mainJs',
		get_stylesheet_directory_uri() . '/js/main.js',
		array('jquery-select2'), /*Tuesday, June 02, 2020 16:06:35 (by smarty)*/
		'4.7',
		true
	);
	wp_enqueue_script(
		'jquery-select2',
		WC()->plugin_url() . '/assets/js/select2/select2.full.min.js',
		array('jquery'),
		'2.0',
		true
	);/*Tuesday, June 02, 2020 14:38:15 (by smarty)*/
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_child_scripts' );


/**
 * Post Type
 */
 add_action('init', 'my_custom_init');
 function my_custom_init(){
 	register_post_type('faq', array(
 		'labels'             => array(
 			'name'               => 'Вопросы',
 			'singular_name'      => 'Вопрос',
 			'add_new'            => 'Добавить новый',
 			'add_new_item'       => 'Добавить новый вопрос',
 			'edit_item'          => 'Редактировать',
 			'new_item'           => 'Новый вопрос',
 			'view_item'          => 'Смотреть вопрос',
 			'search_items'       => 'Найти',
 			'not_found'          => 'Не найдено',
 			'not_found_in_trash' => 'Не найдено в корзине',
 			'parent_item_colon'  => '',
 			'menu_name'          => 'FAQ'
 		  ),
 		'public'             => true,
 		'publicly_queryable' => true,
 		'show_ui'            => true,
 		'show_in_menu'       => true,
 		'query_var'          => true,
 		'rewrite'            => true,
 		'capability_type'    => 'post',
 		'has_archive'        => true,
 		'menu_icon'          => 'dashicons-editor-help',
 		'hierarchical'       => false,
 		'menu_position'      => 10,
 		'supports'           => array('title','custom-fields')
 	) );
 	register_post_type('instagram', array(
 		'labels'             => array(
 			'name'               => 'Отзывы',
 			'singular_name'      => 'Отзыв',
 			'add_new'            => 'Добавить новый',
 			'add_new_item'       => 'Добавить новый отзыв',
 			'edit_item'          => 'Редактировать',
 			'new_item'           => 'Новый отзыв',
 			'view_item'          => 'Смотреть отзыв',
 			'search_items'       => 'Найти',
 			'not_found'          => 'Не найдено',
 			'not_found_in_trash' => 'Не найдено в корзине',
 			'parent_item_colon'  => '',
 			'menu_name'          => 'Отзывы'
 		  ),
 		'public'             => true,
 		'publicly_queryable' => true,
 		'show_ui'            => true,
 		'show_in_menu'       => true,
 		'query_var'          => true,
 		'rewrite'            => true,
 		'capability_type'    => 'post',
 		'menu_icon'          => 'dashicons-thumbs-up',
 		'has_archive'        => true,
 		'hierarchical'       => false,
 		'menu_position'      => 11,
 		'supports'           => array('title','custom-fields')
 	) );
 }

function remove_menus(){
    remove_menu_page( 'edit.php' );                   //Записи
    remove_menu_page( 'edit-comments.php' );          //Комментарии
}
add_action( 'admin_menu', 'remove_menus' );

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}

// Product thumbnail in checkout
add_filter( 'woocommerce_cart_item_name', 'product_thumbnail_in_checkout', 20, 3 );
function product_thumbnail_in_checkout( $product_name, $cart_item, $cart_item_key ){
    if ( is_checkout() )
    {
        $thumbnail   = $cart_item['data']->get_image(array( 80, 80));
        $image_html  = '<div class="product-item-thumbnail">'.$thumbnail.'</div> ';

        $product_name = $image_html . $product_name;
    }
    return $product_name;
}

add_filter( 'woocommerce_cart_item_name', 'customizing_checkout_item_name', 10, 3);
function customizing_checkout_item_name( $item_name, $cart_item, $cart_item_key ) {
    if( is_checkout() )
        $item_name .= '<br>';

    return $item_name;
}

add_filter( 'woocommerce_checkout_cart_item_quantity', 'customizing_checkout_item_quantity', 10, 3);
function customizing_checkout_item_quantity( $quantity_html, $cart_item, $cart_item_key ) {
    $quantity_html = ' <br>
            <span class="product-quantity">' . __('Днів:') . ' <strong>' . $cart_item['quantity'] . '</strong></span>';

    return $quantity_html;
}
## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
if( 'disable_gutenberg' ){
	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	// отключим подключение базовых css стилей для блоков
	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}
// 29-05-2020
/**
 * MiniCart widget
 */
function register_cart_widgets(){
	register_sidebar( array(
		'name' => "Cart Widget Area",
		'id' => 'cart-sidebar',
		'description' => 'Cart floating sidebar',
        'before_widget' => '<div class="zz-cart-wrapper">',
        'after_widget' => '<div class="zz-maskover"></div></div>',
        'before_title' => '<span class="cart-title">',
        'after_title' => '</span>',
        'class' => 'widget woocommerce widget_shopping_cart cart-floating-sidebar',
	) );
}
add_action( 'widgets_init', 'register_cart_widgets' );

/**
 * MiniCart quantities inputs
 */
add_filter( 'woocommerce_widget_cart_item_quantity', 'add_minicart_quantity_fields', 10, 3 );
function add_minicart_quantity_fields( $html, $cart_item, $cart_item_key ) {
    $product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $cart_item['data'] ), $cart_item, $cart_item_key );

    return '<div class="qnt_blk"><div class="qnt_label">Дні раціону:</div><input type="button" value="-" class="qty_button minus" />' . woocommerce_quantity_input( array('input_value' => $cart_item['quantity']), $cart_item['data'], false ) . '<input type="button" value="+" class="qty_button plus" />' . '<p class="qnt_label_day">Оберіть дні доставки:</p>' . '<span class="quantity">' . $cart_item['quantity'] . ' &times; ' . $product_price . ' = ' . $cart_item['quantity'] * (wc_get_price_excluding_tax($cart_item['data'])). get_woocommerce_currency_symbol() . '</span></div>';

    // return var_dump( (wc_get_price_excluding_tax($cart_item['data'])) );
}

/**
 * MiniCart quantities ajax url
 */
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

	wp_localize_script('twentysixteen-script', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);

}
/**
 * MiniCart quantities ajax
 */
add_action('wp_footer', 'my_action_javascript', 99);
function my_action_javascript() {
	?>
	<script type="text/javascript" >
// ************************************************
	jQuery(document).ready(function($) {
		$('.zz-cart-wrapper').append("<div class='zz-load'><img src='/wp-content/themes/twentysixteen-child/img/load.gif'></div>");
	// 	$('.zz-cart-wrapper .cart-title').append('<span class="zz-cart-close"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 172 172" style=" fill:#000000;"><g transform="translate(2.408,2.408) scale(0.972,0.972)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="5" stroke-linejoin="round"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg></span>');
	});
// ************************************************
	function updateCartFragment() {
	 jQuery('.zz-load').addClass('zz-load-active');
	 $fragment_refresh = {
	  url: woocommerce_params.ajax_url,
	  type: 'POST',
	  data: { action: 'woocommerce_get_refreshed_fragments' },
	  success: function( data ) {
	  	// console.log(data);
	    if ( data && data.fragments ) {
	        jQuery.each( data.fragments, function( key, value ) {
	            jQuery(key).replaceWith(value);
	        });

	        if ( window.localStorage ) {
	            sessionStorage.setItem( "wc_fragments", JSON.stringify( data.fragments ) );
	            sessionStorage.setItem( "wc_cart_hash", data.cart_hash );
	        }
	        jQuery('body').trigger( 'wc_fragments_refreshed' );
	    }
	  }
	 };
	 //Always perform fragment refresh
	 jQuery.ajax( $fragment_refresh ).done(function(data){
	 	jQuery('.zz-load').removeClass('zz-load-active');
	 });
	}
	jQuery(document).ready(function($) {
		updateCartFragment();
		$(document).on( "click", ".zz-fast-ration-handler", function() {
			// console.log('click');
		  $('.zz-fast-ration').toggleClass( "open" );
		});
		$(document).on('change', 'input[name="quantity"]', function() {
			var inpt = $(this),
				qty = inpt.val(),
				key = inpt.parents('.mini_cart_item').find('a.remove_from_cart_button').data('cart_item_key');
		  	// console.log(inpt.val());
		  	// console.log(key);
			var data = {
				action: 'my_action',
				cart_item_key: key,
				cart_item_qty: qty
			};
			jQuery.post( myajax.url, data, function(response) {
				updateCartFragment();
			});
		});
		$(document).on('change', 'input[name="food_dates"]', function() {
			var inpt = $(this),
				std = inpt.val(),
				key = inpt.data('cart_item_key');
		  	// console.log(inpt.val());
		  	// console.log(key);
			var data = {
				action: 'my_action_second',
				cart_item_key: key,
				cart_item_std: std
			};
			jQuery.post( myajax.url, data, function(response) {
				updateCartFragment();
				// console.log(response);
			});
		});
	});
	</script>
	<?php
}

/**
 * MiniCart quantities ajax backend
 */
add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');
function my_action_callback() {
	//the cart key stores information about cart
	$cartKeySanitized = filter_var($_POST['cart_item_key'], FILTER_SANITIZE_STRING);
	//the new qty you want for the product in cart
	$cartQtySanitized = filter_var($_POST['cart_item_qty'], FILTER_SANITIZE_STRING);
	//update the quantity
	ob_start();
	WC()->cart->set_quantity($cartKeySanitized,$cartQtySanitized,true);
	ob_get_clean();
	// echo "resp cartKeySanitized-> ".$cartKeySanitized." ; resp cartKeySanitized-> ".$cartQtySanitized;
	wp_die();
}

add_action('wp_ajax_my_action_second', 'my_action_second_callback');
add_action('wp_ajax_nopriv_my_action_second', 'my_action_second_callback');
function my_action_second_callback() {
	//the cart key stores information about cart
	$cartKeySanitized = filter_var($_POST['cart_item_key'], FILTER_SANITIZE_STRING);
	//the new qty you want for the product in cart
	$cartSTDSanitized = filter_var($_POST['cart_item_std'], FILTER_SANITIZE_STRING);
	//update the date
	// ob_start();
	$cart = WC()->cart->cart_contents;
	// echo "start";
	foreach( $cart as $cart_item_id => $cart_item ) {
		// echo "resp cartKeySanitized-> ".$cartKeySanitized." ; resp cart_item_id-> ".$cart_item_id;
		if($cart_item_id == $cartKeySanitized){
			// $cart_item['food_dates'] = $cartSTDSanitized;
			// var_dump($cartSTDSanitized);
			$daysArr = array_filter(explode(' ; ',$cartSTDSanitized));
			// foreach ($daysArr as $key => $value) {
			// 	// echo date("Y-m-d", strtotime($value));
			// 	$date = new DateTime($value);
			// 	echo $date->format('Y-m-d');
			// 	echo "  ";
			// };
			// var_dump($daysArr);
			$custom_data = array();
			$custom_data['food_dates'] = implode(' ; ',$daysArr);
			// var_dump($custom_data['food_dates']);
			$cart_item['custom_data'] = $custom_data;
			WC()->cart->cart_contents[$cart_item_id] = $cart_item;
			WC()->cart->set_quantity($cartKeySanitized,count($daysArr),true);
		}
	}
	WC()->cart->set_session();
	// var_dump(WC()->cart->cart_contents);
	// ob_get_clean();
	// echo "resp cartKeySanitized-> ".$cartKeySanitized." ; resp cartSTDSanitized-> ".$cartSTDSanitized;
	wp_die();
}


/**
 * Cart page add item meta (page not used at this site)
 */
add_action( 'woocommerce_before_add_to_cart_button', 'add_fields_before_add_to_cart' );
// add_filter( 'woocommerce_widget_cart_item_quantity', 'filter_woocommerce_widget_cart_item_quantity', 10, 3 );

function add_fields_before_add_to_cart( ) {
	?>
	<table>
		<tr>
			<td>
				<?php _e( "Date:", "frfd"); ?>
			</td>
			<td>
				<input type="text" name="food_dates" id="food_dates" placeholder="start date">
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Add data to cart item
 */
add_filter( 'woocommerce_add_cart_item_data', 'add_cart_item_data', 25, 2 );

function add_cart_item_data( $cart_item_meta, $product_id ) {

	if ( isset( $_POST ['food_dates'] ) ) {
		$custom_data  = array() ;
		$custom_data [ 'food_dates' ]    = isset( $_POST ['food_dates'] ) ?  sanitize_text_field ( $_POST ['food_dates'] ) : "" ;

		$cart_item_meta ['custom_data']     = $custom_data ;
	}

	return $cart_item_meta;
}

/**
 * Display the custom data on cart and checkout page
 */
add_filter( 'woocommerce_get_item_data', 'get_item_data' , 25, 2 );

function get_item_data ( $other_data, $cart_item ) {

	if ( isset( $cart_item [ 'custom_data' ] ) ) {
		$custom_data  = $cart_item [ 'custom_data' ];
		if(is_checkout()){
			$daysArr = array_filter(explode(' ; ',$custom_data['food_dates']));
			foreach ($daysArr as $key => $value) {
				$date = new DateTime($value);
				$daysArr[$key] = $date->format('Y-m-d');
			}
			$custom_data['food_dates'] = implode(' ; ',$daysArr);
		}
		$other_data[] =   array( 'name' => 'Даты',
					 'display'  => $custom_data['food_dates'] );
	}

	return $other_data;
}

/**
 * Add order item meta
 */

add_action( 'woocommerce_add_order_item_meta', 'add_order_item_meta' , 10, 2);

function add_order_item_meta ( $item_id, $values ) {
	if ( isset( $values [ 'custom_data' ] ) ) {
		$custom_data  = $values [ 'custom_data' ];
		$daysArr = array_filter(explode(' ; ',$custom_data['food_dates']));
		foreach ($daysArr as $key => $value) {
			$date = new DateTime($value);
			$daysArr[$key] = $date->format('Y-m-d');
		}
		$custom_data['food_dates'] = implode(' ; ',$daysArr);
		wc_add_order_item_meta( $item_id, 'Даты', $custom_data['food_dates'] );
	}else{
		$quantity  = $values['quantity'];
		$daysArr = array_fill(2, $quantity, '');
		foreach ($daysArr as $key => $value) {
			$date = strtotime('+'.$key.' day');
			$daysArr[$key] = date('Y-m-d', $date);
		}
		$custom_data['food_dates'] = implode(' ; ',$daysArr);
		wc_add_order_item_meta( $item_id, 'Даты', $custom_data['food_dates'] );
	}
}

// Minimum CSS to remove +/- default buttons on input field type number
add_action( 'wp_head' , 'custom_quantity_fields_css' );
function custom_quantity_fields_css(){
    ?>
    <style>
    .quantity input::-webkit-outer-spin-button,
    .quantity input::-webkit-inner-spin-button {
        display: none;
        margin: 0;
    }
    .quantity input.qty {
        appearance: textfield;
        -webkit-appearance: none;
        -moz-appearance: textfield;
    }
    </style>
    <?php
}


add_action( 'wp_footer' , 'custom_quantity_fields_script', 99);
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
        	console.log($( this ).siblings( 'div.quantity' ));
            var $qty        = $( this ).siblings( '.quantity' ).find('input[name="quantity"]'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}

// remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);

// Перевод теста
add_filter('gettext', 'translate_reply');
add_filter('ngettext', 'translate_reply');

function translate_reply($translated)
{
$translated = str_ireplace('Ваша корзина', 'Ваш кошик', $translated);
$translated = str_ireplace('Подытог', 'Загалом', $translated);
$translated = str_ireplace('Оформление заказа', 'Оформити замовлення', $translated);
$translated = str_ireplace('Подтвердить заказ', 'Підтвердити замовлення', $translated);


// $translated = str_ireplace('Корзина пуста.', 'Кошик порожній.', $translated);

return $translated;
}