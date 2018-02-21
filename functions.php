<?php
// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');


  //theme setup
  function wbp_theme_setup() {
    add_theme_support('post-thumbnails');
    // support for navmenus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'WPbootstrap' ),
    ) );

    //Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

add_action('after_setup_theme','wbp_theme_setup');

    //Widget Locations

  function wpb_init_widgets($id){
    register_sidebar(array(
      'name' => 'Box1',
      'id'   => 'box1',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  =>  '<h2>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Box2',
      'id'   => 'box2',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  =>  '<h2>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Box3',
      'id'   => 'box3',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  =>  '<h2>',
      'after_title'   => '</h4>'
    ));
  }

add_action('widgets_init', 'wpb_init_widgets');

// customizer
require get_template_directory(). '/inc/customizer.php';
