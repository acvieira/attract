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

<title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

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
    <link rel="stylesheet" href="http://staging2.attractal.com/css/gumby.css">
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    <link href="http://staging2.attractal.com/css/style.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <script src="http://staging2.attractal.com/js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="header-deco"></div>
	<div class="container">


<!-- Logo + Search + Top Links /-->
<div class="row">
        <header class="twelve columns special head">
            <h1 id="logo" class="five columns">attractal</h1>
            <div id="header_tools" class="seven columns">
                <div id="search">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	                    <div>
	                	    <input type="text" value="" name="s" id="s" />
	                	    <input type="submit" id="searchsubmit" value="Search" />
	                    </div>
	                </form>
	            </div>
                
                 <ul id="tools">
                    <li class="share"><a href="#">share</a></li>
                    <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
                    <li class="contacts"><a href="#">Contact</a></li>
                </ul>
                <ul id="shortcuts">
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="insights">Insights</a></li>
                    <li><a href="alumni">Alumni</a></li>
                </ul>
            </div>
        </header>
    </div>

<!-- Main Menu /-->

  	<div class="row nomargin">
	    <div class="twelve columns">
	    	<ul id="areas">
            	<li class="green"><a href="consulting">Consulting</a></li>
                <li class="silver"><a href="technology">Technology</a></li>
                <li class="gold"><a href="investments">Attractal Investments</a></li>
            </ul>
	    </div>
    </div>
    

