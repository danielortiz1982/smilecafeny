<?php

add_action('after_setup_theme', 'smile_cafe_Setup');
function smile_cafe_Setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );	
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		));
	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		));

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'smile_cafe_menu' ),
		'footer' => esc_html__( 'Footer', 'smile_cafe_menu' ),
		));
}
// end of smile_cafe_Setup
add_action('widgets_init', 'smile_cafe_Widgets_Init');
function smile_cafe_Widgets_Init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Smile Cafe Widget', 'Smile Cafe Widget' ),
		'id'            => 'smile-cafe-Widget',
		'description'   => esc_html__( 'Smile Cafe Widget', 'Smile Cafe Widget' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		));
}
//end of smile_cafe_Widgets_Init
add_action('wp_enqueue_scripts', 'smile_cafe_Scripts');
function smile_cafe_Scripts(){
	wp_enqueue_style( 'smile-cafe-style-reset', get_stylesheet_uri() );
	wp_enqueue_style( 'smile-cafe-style', get_template_directory_uri() . '/less/css/style.min.css' );
	wp_enqueue_style( 'smile-cafe-font-awesome', get_template_directory_uri() . '/less/css/font-awesome.min.css' );
	wp_enqueue_style( 'smile-cafe-bootstrap', get_template_directory_uri() . '/less/css/bootstrap.min.css' );
	wp_enqueue_script('smile-cafe-jQuery', get_template_directory_uri() . '/js/lib/jquery.js', array(), false, true);
	wp_enqueue_script('smile-cafe-bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('smile-cafe-mainjs', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
// end of smile_cafe_Scripts
add_action('admin_enqueue_scripts', 'admin_style');
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/less/css/admin/admin.css');
}
// end of admin_style
add_action('post_edit_form_tag', 'update_edit_form');
function update_edit_form() {
    echo ' enctype="multipart/form-data"';
}
// end of update_edit_form

//require('inc/custom_post_type.php');
//require('inc/custom_taxonomies.php');
//require('inc/custom_meta_boxes.php');


remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );