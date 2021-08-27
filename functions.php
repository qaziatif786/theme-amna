<?php
/*
Including files
*/
require get_template_directory()  . '/inc/admin/theme-options.php';
require get_template_directory()  . '/inc/admin/amna_theme_data.php';
require get_template_directory()  . '/inc/admin/enqueue.php';
require get_template_directory()  . '/inc/admin/custom-post-type.php';
require get_template_directory()  . '/inc/theme-functions.php';
require get_template_directory()  . '/inc/woocommerce.php';
require get_template_directory()  . '/inc/admin/widget/widget.php';
require get_template_directory()  . '/inc/admin/amna-inline-css.php';
require get_template_directory()  . '/inc/admin/metabox.php';

/**
 * Register navigation menus.
 */
function amna_menu() {

	$locations = array(
		'primary'  => __( 'Primary Menu', 'amna' ),
		'mobile'   => __( 'Mobile Menu', 'amna' ),
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'amna_menu' );

/**
 * Register widget areas.
 */
function amna_register_sidebar() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Widget 1', 'amna' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'amna' ),
				'class'         => '',
            	'before_widget' => '<div class="widget">',
            	'after_widget'  => '</div>',
            	'before_title'  => '<h2 class="heading">',
            	'after_title'   => '</h2>',
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Widget 2', 'amna' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'amna' ),
				'class'         => '',
            	'before_widget' => '<div class="widget">',
            	'after_widget'  => '</div>',
            	'before_title'  => '<h2 class="heading">',
            	'after_title'   => '</h2>',
			)
		)
	);
	// Footer #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Widget 3', 'amna' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Widgets in this area will be displayed in the third column in the footer.', 'amna' ),
				'class'         => '',
            	'before_widget' => '<div class="widget">',
            	'after_widget'  => '</div>',
            	'before_title'  => '<h2 class="heading">',
            	'after_title'   => '</h2>',
			)
		)
	);
	// Footer #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Widget 4', 'amna' ),
				'id'          => 'sidebar-4',
				'description' => __( 'Widgets in this area will be displayed in the fourth column in the footer.', 'amna' ),
				'class'         => '',
            	'before_widget' => '<div class="widget">',
            	'after_widget'  => '</div>',
            	'before_title'  => '<h2 class="heading">',
            	'after_title'   => '</h2>',
			)
		)
	);
	// Main Sidebar
	register_sidebar(
		array_merge(
			array(
				'name'        => __( 'Sidebar', 'amna' ),
				'id'          => 'sidebar',
				'description' => __( 'Widgets in this area will be displayed in the sidebar of the theme.', 'amna' ),
				'class'         => '',
            	'before_widget' => '<div id="%1$s" class="widget">',
            	'after_widget'  => '</div>',
            	'before_title'  => '<h2 class="widget-sidebar-heading">',
            	'after_title'   => '</h2>',
			)
		)
	);
	// Widget Top Left
	register_sidebar(
			$args = array(
				'name'        => __( 'Top Bar Left', 'amna' ),
				'id'          => 'top-left',
				'description' => __( 'Widgets in this area will be displayed in the Top Bar Left Side', 'amna' ),
				'class'         => '',
            	'before_widget' => '',
            	'after_widget'  => '',
            	'before_title'  => '<h2 class="widget-top-left">',
            	'after_title'   => '</h2>',
			)
	);
	// Widget Top Right
	register_sidebar(
			$args = array(
				'name'        => __( 'Top Bar Right', 'amna' ),
				'id'          => 'top-right',
				'description' => __( 'Widgets in this area will be displayed in the Top Bar Right Side', 'amna' ),
				'class'         => '',
            	'before_widget' => '',
            	'after_widget'  => '',
            	'before_title'  => '<h2 class="widget-top-right">',
            	'after_title'   => '</h2>',
			)
	);
	// Home Page Popup Widget
	register_sidebar(
			$args = array(
				'name'        => __( 'Home Page Popup', 'amna' ),
				'id'          => 'popup',
				'description' => __( 'Widgets in this area will be displayed in the Popup Content', 'amna' ),
				'class'         => '',
            	'before_widget' => '',
            	'after_widget'  => '',
            	'before_title'  => '',
            	'after_title'   => '',
			)
	);

}
add_action( 'widgets_init', 'amna_register_sidebar' );

/**
 * Register and Enqueue Styles.
 */
function amna_register_styles() {
	$theme_version = '1.0'; //wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'amna-style', get_stylesheet_uri(), $theme_version );
	//wp_enqueue_style( 'amna-options-style', get_template_directory_uri().'/inc/theme-options_css.css', $theme_version );
	wp_enqueue_style( 'amna-font-awesome', get_template_directory_uri().'/assets/font-awesome-4.7.0/css/font-awesome.min.css', $theme_version );
	
	wp_enqueue_script( 'amna-theme-js', get_template_directory_uri().'/assets/js/index.js', array('jquery'), $theme_version, true );
	// Add output of Customizer settings as inline style.
	//wp_add_inline_style( 'twentytwenty-style', twentytwenty_get_customizer_css( 'front-end' ) );
}
add_action( 'wp_enqueue_scripts', 'amna_register_styles' );

add_action('wp_head', 'amna_generate_theme_options_css');
function amna_generate_theme_options_css(){
	$options = get_option('amna_fields');
	$amna_custom_head_code_group = $options['custom']['head_code'];
	$amna_custom_js_code_group = $options['custom']['js'];
	//echo $amna_custom_head_code_group;
	//echo $amna_custom_js_code_group;
};

function is_sidebar_active($index) {
    global $wp_registered_sidebars;
    $widgetcolums = wp_get_sidebars_widgets();
    if ($widgetcolums[$index])
        return true;
    return false;
}

///////////////////////////////////////////////
//Add support of title tag on wordpress
//////////////////////////////////////////////
add_theme_support( 'title-tag' );


///////////////////////////////////////////////
//Add support of Post Thumbnail on wordpress
//////////////////////////////////////////////
add_theme_support( 'post-thumbnails' );

// Set post thumbnail size.
set_post_thumbnail_size( 1200, 9999 );

add_action('pagination','display_pagination');
function display_pagination(){
	global $wp_query;
	$total = $wp_query->max_num_pages;
	// only bother with the rest if we have more than 1 page!
	if ( $total > 1 )  {
		 // get the current page
		 if ( !$current_page = get_query_var('paged') )
			  $current_page = 1;
		 // structure of "format" depends on whether we're using pretty permalinks
		 $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
		 echo '<div class="pagination">';
		 echo paginate_links(array(
			  'base' => get_pagenum_link(1) . '%_%',
			  'format' => $format,
			  'current' => $current_page,
			  'total' => $total,
			  'mid_size' => 4,
			  'type' => 'list'
		 ));
		 echo '</div>';
	}
}