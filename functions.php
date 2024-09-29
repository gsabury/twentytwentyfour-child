<?php 
function my_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_styles' );


add_theme_support('menus');
add_theme_support('widgets');

add_action( 'customize_register', '__return_true' );

   
 // Register Sidebar
 function register_single_sidebar(){
       register_sidebar(
            array(
                'name'=>'Post Sidebar',
                'id'=>'sidebar',
                'description'=>"Post-Sidebar",
                'class'=>'',
                'before_widget'=>'',
                'after_widget'=>'',
                'before_title'=>'',
                'after_title'=>''
            ));
}
add_action( 'widgets_init', 'register_single_sidebar' );

// Register Menu Locations
function register_menu_locations() {
  register_nav_menus(
    array(
      'primary_menu' => __( 'Primary Menu' ),
      'footer_about_menu' => __( 'Footer About Menu' ),
      'footer_privacy_menu' => __( 'Footer Privacy Menu' ),
      'footer_social_menu' => __( 'Footer Social Menu' ),
     )
   );
 }
 add_action( 'init', 'register_menu_locations' );
 
   
?>