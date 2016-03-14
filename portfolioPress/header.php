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

<nav class="mobileNav">
    <i class="fa fa-bars"></i>
</nav>
<div class="mobileContainer">
  <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
  )); ?>
</div>

<header>
  <nav>
    <div class="navContainer">  
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


