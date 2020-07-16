<?php
    $posts = get_posts( array(
        'numberposts' => 25,
        'post_type'   => 'menu',
        'suppress_filters' => true, 
     ));
    foreach( $posts as $post ){ setup_postdata($post);
        ?>
        <div class="food-cards__slide food-cards__slide7">
            <div class="icon" style="background-image: url(<?php the_field('menu-icon'); ?>)"></div>
            <span class="be-free">be free</span>
            <h3><?php the_field('menu-name'); ?></h3>
        </div>
    <?php
    }
    wp_reset_postdata();
?>

<?php 
	$terms = get_terms( 'dish-cat' );

	if( $terms && ! is_wp_error($terms) ){
	echo '<div class="food-cards">';
	foreach( $terms as $term ){
	    // echo "<li>". $term->name ."</li>";

	    echo "<div class=\"food-cards__slide\">
	        <div class=\"icon\"></div>
	        <span class=\"be-free\">be free</span>
	        <h3>". $term->name ."</h3>
	    </div>";

	}
	echo '</div>';
	}
?>