<?php

//enqueue styles and scripts
function bredewold_files() {
  // stylesheets
	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/styles/css/style.css', array(), false, 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/css/grid.min.css', array(), false, 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/styles/css/swiper.min.css', array(), false, 'all');
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap', false );

  // scripts
  wp_enqueue_script( 'main-script', get_theme_file_uri( '/scripts/script.js' ), array( 'jquery' ), '1', true );
	wp_enqueue_script( 'swiper', get_theme_file_uri( '/scripts/swiper.min.js' ), array( 'jquery' ), '1', true );
}
add_action( 'wp_enqueue_scripts', 'bredewold_files' );

//disable emoji's
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

//add theme options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

//svg upload
//make sure to put "define('ALLOW_UNFILTERED_UPLOADS', true);" in the wp-config file
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

//register menu's
function bredewold_menus() {
	$locations = array(
		'primary_horizontal'  => __( 'Desktop horizontal menu', 'bredewold' ),
		'primary_vertical' => __( 'Desktop vertical menu', 'bredewold' )
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'bredewold_menus' );

//add thumbnail support
add_theme_support( 'post-thumbnails' );


//add style to acf
function my_acf_admin_head() {
    ?>
    <style type="text/css">

    .button-choice{
			background-color:#EDEDED;
		}

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

?>
