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
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://cdn.attractal.com/js/gfeedfetcher.js"></script>
    <script type="text/javascript" src="http://cdn.attractal.com/js/gajaxticker.js"></script>
    <script type="text/javascript" src="http://cdn.attractal.com/js/menudown.js"></script>

<title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name');}
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
    <link rel="stylesheet" href="http://cdn.attractal.com/css/gumby.css">
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdn.attractal.com/css/bjqs.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <script src="http://cdn.attractal.com/js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="header-deco"></div>
	<div class="container">


<!-- Logo + Search + Top Links /-->
<div class="row">
        <header class="twelve columns special head">
            <h1 id="logo" class="five columns">attractal</h1>
            <div id="header_tools" class="six columns">
            
                <div id="search">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	                    <div>
	                	    <label class="field"><input type="text" value="" name="s" id="s" class="input" /></label>
	                	    <!--<input type="submit" id="searchsubmit" value="Search" />-->
	                    </div>
	                </form>
	            </div>
                <ul id="tools">
                    <li class="share"><a href="#">share</a>
                    <!-- menu social -->
                    	<ul id="social-bookmarks">
	                    	<li id="fb"><a href="#">Facebook</a></li>
	                    	<li id="gplus"><a href="#">Google +</a></li>
	                    	<li id="lid"><a href="http://www.linkedin.com/company/attractal/" target="_blank">LinkedIn</a></li>
	                    	<li id="twitter"><a href="#">Twitter</a></li>
	                    </ul>
	               <!-- fim do menu social -->            
	                </li>
                    <li class="rss"><a href="<?php echo home_url(); ?>/feed/rss/">RSS</a></li>
                    <li class="contacts"><a href="<?php echo home_url(); ?>/contacts">Contacts</a></li>
                </ul>
                <ul id="shortcuts">
                    <li><a href="<?php echo home_url(); ?>/">Home</a></li>
                    <li><a href="<?php echo home_url(); ?>/about">About Us</a></li>
                    <li><a href="<?php echo home_url(); ?>/insights">Insights</a></li>
                    <li><a href="<?php echo home_url(); ?>/attractor">Attractor</a></li>
                </ul>
            </div>
        </header>
    </div>

<!-- START Main Menu /-->

  	<div class="row nomargin">
	    <div class="twelve columns">
	    	<ul id="areas">
            	<li class="green"><a href="<?php echo home_url(); ?>/consulting">consulting</a></li>
                <li class="silver"><a href="<?php echo home_url(); ?>/technology">technology</a></li>
                <li class="gold"><a href="<?php echo home_url(); ?>/investments">attractal investments</a></li>
            </ul>
	    </div>
    </div>
    
<!-- END Main Menu /-->
