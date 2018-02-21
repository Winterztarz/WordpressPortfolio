<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <?php wp_head(); ?>
  <style>
    header {
      background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url'). '/img/bakkgrund1.png'); ?>);
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-toggleable-md bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img class="minilogo" src="<?php bloginfo('template_url'); ?>/img/wlogo1.png" alt="Responsive image" width="80px"></a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php
        wp_nav_menu( array(
        'theme_location'	=> 'primary',
        'depth'				=> 2,
        'container'			=> false,
        'menu_class'		=> 'navbar-nav mr-auto',
        'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
        'walker'			=> new WP_Bootstrap_Navwalker())
      );
      ?>
    </div>
  </div>
</nav>

<header>
    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/logo1.png" alt="Responsive image" width="600px">
</header>
