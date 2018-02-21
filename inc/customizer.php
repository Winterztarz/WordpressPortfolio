<?php
function wpb_customize_register($wp_customize){
 // Showcase section
$wp_customize->add_section('showcase', array(
  'title' => __('Showcase', 'wpbootstrap'),
  'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
  'priority'  => 130
));

$wp_customize->add_setting('showcase_image', array(
  'default'  => get_bloginfo('template_directory'). '/img/bakkgrund1.png',
  'type'  => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
  'label'   => __('Heading', 'wpbootstrap'),
  'section' => 'showcase',
  'settings' => 'showcase_image',
  'priority' => 1
)));
}

add_action('customize_register', 'wpb_customize_register');

  ?>
