<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'slidePortada', 720,480, true);
add_image_size('slideProyecto',465,350, true);
add_image_size('imgObispo',150,150, true);

//
function getPrevNext(){
	$pagelist = get_pages('sort_column=menu_order&sort_order=asc');
	$pages = array();
	foreach ($pagelist as $page) {
	   $pages[] += $page->ID;
	}

	$current = array_search(get_the_ID(), $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];

	echo '<div class="navigation">';

	if (!empty($prevID)) {
		echo '<div class="alignleft">';
		echo '<a href="';
		echo get_permalink($prevID);
		echo '"';
		echo 'title="';
		echo get_the_title($prevID);
		echo'">Previous</a>';
		echo "</div>";
	}
	if (!empty($nextID)) {
		echo '<div class="alignright">';
		echo '<a href="';
		echo get_permalink($nextID);
		echo '"';
		echo 'title="';
		echo get_the_title($nextID);
		echo'">Next</a>';
		echo "</div>";
	}
}
//

// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);

    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}
?>
