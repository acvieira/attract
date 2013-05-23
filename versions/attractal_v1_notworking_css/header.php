<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Attractal
 * @since Attractal 1.0
 */
?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
    <?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'attractal' ), max( $paged, $page ) );

	?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="humans.txt">

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <!-- Facebook Metadata /-->
    <meta property="fb:page_id" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:title" content=""/>

    <!-- Google+ Metadata /-->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
    <link rel="stylesheet" href="css/gumby.css">
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="header-deco"></div>
<div class="container">
	<div class="row">
        <header class="twelve columns special head">
            <h1 id="logo" class="five columns">attractal</h1>
            <div id="header_tools" class="seven columns">
                <div id="search">
                    <form action="#" method="post">
                       <label class="field"><?php get_search_form(); ?></label>
                       
                    </form>
                </div>
                
                 <ul id="tools">
                    <li class="share"><a href="#">share</a></li>
                    <li class="rss"><a href="#">RSS</a></li>
                    <li class="contacts"><a href="#">Contact</a></li>
                </ul>
                <ul id="shortcuts">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="insights">Insights</a></li>
                    <li><a href="alumni">Alumni</a></li>
                </ul>
            </div>
        </header>
    </div>

  	<div class="row nomargin">
	    <div class="twelve columns">
	    	<ul id="areas">
            	<li class="green"><a href="consulting">Consulting</a></li>
                <li class="silver"><a href="technology">Tecnology</a></li>
                <li class="gold"><a href="investments">Attractal Investments</a></li>
            </ul>
	    </div>
    </div>
</div>