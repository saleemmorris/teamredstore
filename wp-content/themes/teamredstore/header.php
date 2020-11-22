<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  
<div class="container d-flex justify-content-between">
    <a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Team Red Store" class="logo"></a>
  </div>
  <?php wp_nav_menu(
      array(
        'theme_menu' => 'top-menu',
        'menu_class' => 'top-nav-menu'
      )
    ); 
  ?>
</header>