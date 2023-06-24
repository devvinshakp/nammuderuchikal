<?php

if ( function_exists('register_sidebar') )

    register_sidebar(array(

        'name' => 'Left Sidebar',

        'before_widget' => '<li>',

        'after_widget' => '</li>',

        'before_title' => '<h2 class="widgetTitle">',

        'after_title' => '</h2>',

    ));

	if ( function_exists('register_sidebar') )

    register_sidebar(array(

        'name' => 'Right Sidebar',

        'before_widget' => '<li>',

        'after_widget' => '</li>',

        'before_title' => '<h2 class="widgetTitle">',

        'after_title' => '</h2>',

    ));

	add_theme_support('post-thumbnails');

	set_post_thumbnail_size('my_thumb',190,140,true);
	set_post_thumbnail_size('small_thumb',60,60,true);	
	add_image_size( 'category-thumb', 370, 305,true);
	set_post_thumbnail_size('mini-thumbnail',946,320,true);

	 // to call this thumbnail, put this in template:-> the_post_thumbnail('my_thumb'); 

	// This theme uses wp_nav_menu() in one location.  

	register_nav_menus( array('header_Menu' => __( 'Header Menu', 'sw theme' ),'footer_menu'=> __( 'Footer Menu', 'sw theme' ) ));

	add_filter('the_generator', 'version');

	function version() {

		return '';

	}



	function wp_mobile_menu( $args = array() ) {

		$output = '';

		@extract($args);

		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {

		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		$menu_items = wp_get_nav_menu_items( $menu->term_id );

		$output = "<select id='". $id. "'>";

		$output .= "<option value='' selected='selected'>" . __('Go to...', 'tie') . "</option>";

		foreach ( (array) $menu_items as $key => $menu_item ) {

		$title = $menu_item->title;

		$url = $menu_item->url;

		if ( $menu_item->menu_item_parent ) {

		$title = ' - ' . $title;

		}

		$output .= "<option value='" . $url . "'>" . $title . '</option>';

		}

		$output .= '</select>';

		}

		return $output;

	}

?>
<?php
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
remove_action('wp_head', 'wp_generator');

function remove_generator_filter() { return ''; }
	if (function_exists('add_filter')) {
		$types = array('html', 'xhtml', 'atom', 'rss2', /*'rdf',*/ 'comment', 'export');
		foreach ($types as $type) add_filter('get_the_generator_'.$type, 'remove_generator_filter');
	}
	define('DISALLOW_FILE_EDIT', true);
add_filter( 'ot_show_pages', '__return_false' );
remove_action('wp_head', 'wp_generator');