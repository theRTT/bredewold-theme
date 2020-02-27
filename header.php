<?php WP_head(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <meta name="author" content="Thomas Tromp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
  </head>
  <body <?php body_class(); ?>>

    <!-- header -->
    <header class="container-full" id="header">
      <div class="container header-inner">
        <!-- logo -->
        <img src="<?php the_field('header_logo', 'option'); ?>" alt="logo">
        <!-- navigation -->
        <nav class="horizontal_menu">
          <?php wp_nav_menu(array('container'=> false, 'theme_location' => 'primary_horizontal')); ?>
        </nav>
      </div>
    </header>
