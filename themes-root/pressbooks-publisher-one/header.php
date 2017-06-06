<!doctype html> 
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?><?php if ( get_bloginfo('description') ) { ?> | <?php bloginfo('description'); } ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=<?php echo filemtime('favicon.ico') ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<?php
    wp_head();
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );


  ?>
</head>

<body <?php body_class(); ?> >

  <div id="canvas">

   
    <ul class="skip">
      <li><a href=".menu">Skip to navigation</a></li>
      <li><a href="#primaryContent">Skip to main content</a></li>
      <li><a href="#secondaryContent">Skip to secondary content</a></li>
      <li><a href="#footer">Skip to footer</a></li>
    </ul>

    <div id="header-wrap">
   		<div id="header"> 
	   		<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'h4'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
				<a href="http://mobiapp121.com/"><img src="http://mobiapp121.com/publishing/logo.png" alt="MobiApp121" width="400" height="137" class="aligright " /></a>
					
				</<?php echo $heading_tag; ?>>
				<div id="site-description"></div>
				  
      <!--by default your pages will be displayed unless you specify your own menu content under Menu through the admin panel-->
	<div id="top-menu">	<?php wp_nav_menu( array( 'theme_location' => 'main', 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?></div>
  	 </div> <!-- end #header-->
      
 </div> <!-- end #header-wrap-->

