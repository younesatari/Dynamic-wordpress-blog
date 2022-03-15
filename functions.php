<?php

/* Load Scripts */
function loadScripts() {
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style('mainStyle', get_theme_file_uri('/css/style.css'));
   wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap');
   wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
    

   wp_enqueue_script('scriptOne','https://code.jquery.com/jquery-3.4.1.min.js', NULL,'1.0', true);
   wp_enqueue_script('bootstrapScript','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', NULL,'1.1', true);
   wp_enqueue_script('easingScript',get_theme_file_uri('/lib/easing/easing.min.js'), NULL,'1.3', true);
   wp_enqueue_script(' mainScript',get_theme_file_uri('/js/main.js'), NULL,'1.8', true);
   wp_enqueue_script('waypoints',get_theme_file_uri('/lib/waypoints/waypoints.min.js'), NULL,'1.5', true);
   wp_enqueue_script('bootstrapValidation',get_theme_file_uri('/mail/jqBootstrapValidation.min.js'), NULL,'1.4', true);
   wp_enqueue_script('contactScripts',get_theme_file_uri('/mail/contact.js'), NULL,'1.5', true);
}  

add_action('wp_enqueue_scripts','loadScripts');

/* Register Navigation Menus */
function register_menus() {
   register_nav_menu('topMenu', 'Top Menu');
}

add_action('init','register_menus');

/* Add Thumbnail Support */
add_theme_support('post_thumbnail');

/* Add logo support*/
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
   $defaults = array(
       'height'               => 100,
       'width'                => 400,
       'flex-height'          => true,
       'flex-width'           => true,
       'header-text'          => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
   );

   add_theme_support( 'custom-logo', $defaults );
}

/* Add thunbnail support for custom post types*/
add_theme_support( 'post-thumbnails' );
function theme_setup() {
    register_post_type( 'yourposttype', array(
        'supports' => array('title','thumbnail'),
    ));
}
add_action( 'after_setup_theme', 'theme_setup' );


// slider post type
 function custom_dynamic_slider() {
   $labels = array(
     'name' => _x('Slider', 'post type general name'),
     'singular_name' => _x('Slide', 'post type singular name'),
     'add_new' => _x('Add New', 'slider'),
     'add_new_item' => __('Add New slider'),
     'edit_item' => __('Edit slider'),
     'new_item' => __('New slider'),
     'all_items' => __('All slider'),
     'view_item' => __('View slider'),
     'search_items' => __('Search slider'),
     'not_found' =>  __('No slider found'),
     'not_found_in_trash' => __('No Slider found in Trash'), 
     'parent_item_colon' => '',
     'menu_name' => __('Slider')
 
   );
   $args = array(
     'labels' => $labels,
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true, 
     'show_in_menu' => true, 
     'query_var' => true,
     'rewrite' => true,
     'capability_type' => 'post',
     'has_archive' => true, 
     'hierarchical' => false,
     'menu_position' => null,
     'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
   ); 
   register_post_type('dynamic_slider',$args);
 }
 add_action( 'init', 'custom_dynamic_slider' );

// hire me post type
function hire_me_function() {
  $labels = array(
    'name' => _x('hire me', 'post type general name'),
    'singular_name' => _x('Hire me link', 'post type singular name'),
    'add_new' => _x('Add New', 'slider'),
    'add_new_item' => __('Add New Hire me link'),
    'edit_item' => __('Edit Hire me link'),
    'new_item' => __('New Hire me link'),
    'all_items' => __('All Hire me link'),
    'view_item' => __('View Hire me link'),
    'search_items' => __('Search Hire me link'),
    'not_found' =>  __('No Hire me link found'),
    'not_found_in_trash' => __('No Hire me link found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Hire me link')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('editor','title')
  ); 
  register_post_type('hire_info',$args);
}
add_action( 'init', 'hire_me_function' );

// social media post type
function social_media_func() {
  $labels = array(
    'name' => _x('social icons', 'post type general name'),
    'singular_name' => _x('social icon', 'post type singular name'),
    'add_new' => _x('Add New', 'slider'),
    'add_new_item' => __('Add New social icon'),
    'edit_item' => __('Edit social icon'),
    'new_item' => __('New social icon'),
    'all_items' => __('All social icon'),
    'view_item' => __('View social icon'),
    'search_items' => __('Search social icon'),
    'not_found' =>  __('No social icon found'),
    'not_found_in_trash' => __('No social icon found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('social icon')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('editor','title')
  ); 
  register_post_type('add_social',$args);
}
add_action( 'init', 'social_media_func' );

// CONTACT ME INFOS Post Type
function custom_contact_info() {
  $labels = array(
    'name' => _x('contact infos', 'post type general name'),
    'singular_name' => _x('contact info', 'post type singular name'),
    'add_new' => _x('Add New', 'contact info'),
    'add_new_item' => __('Add New contact info'),
    'edit_item' => __('Edit contact info'),
    'new_item' => __('New contact info'),
    'all_items' => __('All contact info'),
    'view_item' => __('View contact info'),
    'search_items' => __('Search contact info'),
    'not_found' =>  __('No contact info found'),
    'not_found_in_trash' => __('No contact info found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('contact info')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor','thumbnail' )
  ); 
  register_post_type('contact_info',$args);
}
add_action( 'init', 'custom_contact_info' );