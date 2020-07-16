<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>
<div>
<div class="zz-fast-ration-block">
    <div class="zz-fast-ration-handler">
        <div class="zz-li-icon">
            <svg version="1.1" id="add_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><g><path d="M256,0C114.844,0,0,114.844,0,256s114.844,256,256,256s256-114.844,256-256S397.156,0,256,0z M256,490.667C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667z"/><path d="M394.667,245.333h-128v-128c0-5.896-4.771-10.667-10.667-10.667s-10.667,4.771-10.667,10.667v128h-128c-5.896,0-10.667,4.771-10.667,10.667s4.771,10.667,10.667,10.667h128v128c0,5.896,4.771,10.667,10.667,10.667s10.667-4.771,10.667-10.667v-128h128c5.896,0,10.667-4.771,10.667-10.667S400.563,245.333,394.667,245.333z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        </div>
        <div class="zz-li-text">
            Додати
        </div>
    </div>
    <ul class="zz-fast-ration">
        <?php 
            $args = array(
                'post_type'      => 'product',
                'post_status' 	 => 'publish',
                'product_tag'			 => 'have',
                'posts_per_page' => -1
            );

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
                global $product; ?>
                <li>
                    <div class="zz-li-icon">
                        <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                    </div>
                    <div class="zz-li-text">
                        <?php echo $product->get_title();?>  
                        <span class="woocommerce-Price-amount amount"><?php echo $product->get_regular_price(); ?><span class="woocommerce-Price-currencySymbol"><?php echo get_woocommerce_currency_symbol();?></span></span>
                    </div>
                    <div class="zz-li-link">
                        <a rel="nofollow" href="/?add-to-cart=<?php echo $product->get_id();?>" data-quantity="1" data-product_id="<?php echo $product->get_id();?>" data-product_sku="" class="add_to_cart_button ajax_add_to_cart">Додати</a>
                    </div>
                </li>
            <?php
            endwhile;
            wp_reset_query();
        ?>
    </ul>
</div>

<?php if ( ! WC()->cart->is_empty() ) : ?>
	<ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
		<?php
		do_action( 'woocommerce_before_mini_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
				$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
				<li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
					<?php echo $thumbnail; ?>
					<span class="zz-mini-cart-text">
						<?php echo '<span class="zz-mini-cart-title">' . $product_name . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						
						
						<?php echo '<input type="hidden" name="food_dates" id="food_dates'.$cart_item_key.'" data-cart_item_key="'.$cart_item_key.'" placeholder="food_dates">' ?>

						<span class="zz-datepicker">
<svg id="zz-datepicker-open" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#8ac71e;"><g transform="translate(2.408,2.408) scale(0.972,0.972)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#6fa909" stroke="#cccccc" stroke-width="5" stroke-linejoin="round"><path d="M50.16667,0v28.66667h-14.33333v-28.66667zM136.16667,0v28.66667h-14.33333v-28.66667zM28.66667,21.5v14.33333h28.66667v-14.33333h57.33333v14.33333h28.66667v-14.33333h21.5c3.94726,0 7.16667,3.2194 7.16667,7.16667v21.5c0,3.94726 -3.2194,7.16667 -7.16667,7.16667v114.66667h-157.66667v-114.66667c-3.94726,0 -7.16667,-3.2194 -7.16667,-7.16667v-21.5c0,-3.94726 3.2194,-7.16667 7.16667,-7.16667zM21.5,157.66667h129v-100.33333h-129zM50.16667,71.66667v14.33333h-14.33333v-14.33333zM78.83333,71.66667v14.33333h-14.33333v-14.33333zM107.5,71.66667v14.33333h-14.33333v-14.33333zM136.16667,71.66667v14.33333h-14.33333v-14.33333zM50.16667,100.33333v14.33333h-14.33333v-14.33333zM78.83333,100.33333v14.33333h-14.33333v-14.33333zM107.5,100.33333v14.33333h-14.33333v-14.33333zM136.16667,100.33333v14.33333h-14.33333v-14.33333zM50.16667,129v14.33333h-14.33333v-14.33333zM78.83333,129v14.33333h-14.33333v-14.33333zM107.5,129v14.33333h-14.33333v-14.33333zM136.16667,129v14.33333h-14.33333v-14.33333z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#6fa909;" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M35.83333,0v28.66667h14.33333v-28.66667zM121.83333,0v28.66667h14.33333v-28.66667zM7.16667,21.5c-3.94726,0 -7.16667,3.2194 -7.16667,7.16667v21.5c0,3.94726 3.2194,7.16667 7.16667,7.16667v114.66667h157.66667v-114.66667c3.94726,0 7.16667,-3.2194 7.16667,-7.16667v-21.5c0,-3.94726 -3.2194,-7.16667 -7.16667,-7.16667h-21.5v14.33333h-28.66667v-14.33333h-57.33333v14.33333h-28.66667v-14.33333zM21.5,57.33333h129v100.33333h-129zM35.83333,71.66667v14.33333h14.33333v-14.33333zM64.5,71.66667v14.33333h14.33333v-14.33333zM93.16667,71.66667v14.33333h14.33333v-14.33333zM121.83333,71.66667v14.33333h14.33333v-14.33333zM35.83333,100.33333v14.33333h14.33333v-14.33333zM64.5,100.33333v14.33333h14.33333v-14.33333zM93.16667,100.33333v14.33333h14.33333v-14.33333zM121.83333,100.33333v14.33333h14.33333v-14.33333zM35.83333,129v14.33333h14.33333v-14.33333zM64.5,129v14.33333h14.33333v-14.33333zM93.16667,129v14.33333h14.33333v-14.33333zM121.83333,129v14.33333h14.33333v-14.33333z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
<svg id="zz-datepicker-close" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g transform="translate(2.408,2.408) scale(0.972,0.972)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="5" stroke-linejoin="round"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>

						</span>
						<div class="zz-datepicker-wrap"></div>
					</span>
					<?php
					echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						'woocommerce_cart_item_remove_link',
						sprintf(
							'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">Удалить</a>',
							esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
							esc_attr__( 'Remove this item', 'woocommerce' ),
							esc_attr( $product_id ),
							esc_attr( $cart_item_key ),
							esc_attr( $_product->get_sku() )
						),
						$cart_item_key
					);	
					?>
				</li>
				<?php
			}
		}

		do_action( 'woocommerce_mini_cart_contents' );
		?>
	</ul>
</div>

	<div class="zz-cart-wrapper-bottom">
		<p class="woocommerce-mini-cart__total total">
			<?php
			/**
			 * Hook: woocommerce_widget_shopping_cart_total.
			 *
			 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
			 */
			do_action( 'woocommerce_widget_shopping_cart_total' );
			?>
		</p>

		<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

		<p class="woocommerce-mini-cart__buttons buttons"><?php do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?></p>

		<?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

		<?php else : ?>

			<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'Кошик порожній', 'woocommerce' ); ?></p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_mini_cart' ); ?>

	</div>
	
