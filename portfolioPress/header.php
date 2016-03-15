<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- Google Fonts Catamaran -->
  <link href='https://fonts.googleapis.com/css?family=Catamaran:400,200,700' rel='stylesheet' type='text/css'>
  <!-- Google Fonts Martel -->
  <link href='https://fonts.googleapis.com/css?family=Martel:400,300' rel='stylesheet' type='text/css'>
  <!-- Google Fonts Raleway -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Devicon -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<nav class="mobileNav clearfix wrapper">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 640 258.2" style="enable-background:new 0 0 640 258.2;" xml:space="preserve">
<path d="M177,252.5l8.8-8.8c-25-25.1-49.9-67.6-26.9-127l19.8-20.2L260,180l-71.9,72.5l269.9,0.7c0,0-48.1-22-70.8-50.5
  c-27-33.9-32.8-72.2-16.9-114.2l43.8-43.5L615.7,252l17.9,0L414.3,26.7l-42.5,42.2L313.6,9.1l-102.7,102l-31.9-32.8L5.2,252
  L177,252.5z M362.8,78l-56.6,56.3c-16.1-28.4-18.3-59.6-6.8-92.9l14.1-14L362.8,78z"/>
</svg>
    <i class="fa fa-bars"></i>
</nav>
<div class="mobileContainer wrapper">

  <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
  )); ?>
</div>

<header>
  <nav>
    <div class="navContainer">
      <a href="#"> <svg viewBox="0 0 640 258.2"><path d="M177 252.5l8.8-8.8c-25-25.1-49.9-67.6-26.9-127l19.8-20.2L260 180l-71.9 72.5 269.9.7s-48.1-22-70.8-50.5c-27-33.9-32.8-72.2-16.9-114.2L414.1 45l201.6 207h17.9L414.3 26.7l-42.5 42.2-58.2-59.8-102.7 102L179 78.3 5.2 252l171.8.5zM362.8 78l-56.6 56.3c-16.1-28.4-18.3-59.6-6.8-92.9l14.1-14L362.8 78z"/></svg> </a> 
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
      )); ?>
    </div>
  </nav>
  <div class="headerContainer">
    <h1>Colin McCullough</h1>
    <h2>Front-End Developer</h2>
  </div> <!-- /.container -->
</header><!--/.header-->


