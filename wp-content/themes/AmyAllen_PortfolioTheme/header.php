<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link type="image/png" href="images/amyallen_fav_blk.png" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">
  <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  
	<?php	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

  <!-- Load jQuery and our own scripts file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
  <script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	
  <script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
	
  <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.smooth-scroll.min.js"></script>

	<script src="<?php bloginfo('stylesheet_directory');?>/js/masonry-master/dist/masonry.pkgd.min.js"></script>
	
	<script src="<?php bloginfo('stylesheet_directory');?>/js/FlexSlider-version-2.2/jquery.flexslider-min.js"></script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/js/FlexSlider-version-2.2/flexslider.css" type="text/css">
</head>


<body <?php body_class(); ?>>

<div class="header">
  <div class="innerWrapper">

    <h1 class="siteName">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class ="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/i/logo.png"></a>
    </h1>
	
    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'primary' ) ); ?>
  
    <a href="#" class="dropDown">&#9776;</a>
  
  </div> <!-- /.innerWrapper -->
</div><!--/.header-->