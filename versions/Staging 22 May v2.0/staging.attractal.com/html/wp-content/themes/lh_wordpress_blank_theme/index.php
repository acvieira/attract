<?php get_header(); ?>
<body>
<div id="header-deco"></div>
<div class="container">
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

  	<div class="row nomargin">
	    <div class="twelve columns">
	    	<ul id="areas">
            	<li class="green"><a href="consulting">Consulting</a></li>
                <li class="silver"><a href="technology">Technology</a></li>
                <li class="gold"><a href="investments">Attractal Investments</a></li>
            </ul>
	    </div>
    </div>
    
    <div class="row">
        <div class="twelve columns">
            <div id="slideshow">
            <ul id="slides" class="bjqs">
                <li>
                    <img src="http://staging2.attractal.com/img/slide_1.jpg" alt="Consulting" />
                    <div id="caption" style="float:right;">
                        <h1>Consulting <span>that transform your<br /> business to success.</span></h1>
                        <p>Description of the area of action</p>
                    </div>
                </li>
                <li>
                    <img src="http://staging2.attractal.com/img/slide_2.jpg" alt="Technology" />
                    <div id="caption">
                        <h1>Technology <span>solutions bringing your<br />  company to the front</span></h1>
                        <p>Description of the area of action</p>
                    </div>
                </li>
                <li>
                    <img src="http://staging2.attractal.com/img/slide_3.jpg" alt="Attractal Investments" />
                    <div id="caption" style="float:right;">
                        <h1>Investments <span>Knowledgeable experience<br />  at your fingertips.</span></h1>
                        <p>Description of the area of action</p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
    	<div class="three columns news">
    		<h3><?php the_title(); ?></h3>
            <p>
		<?php /* Top post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages = 1 ) { ?>

		<?php } ?>
		
		<?php /* The Loop — with comments! */ ?>
		<?php while ( have_posts() ) : the_post() ?>


		<?php /* The entry content */ ?>
		                   
    		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
           
		<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
		                    <!-- .entry-content -->


		<!-- #post-<?php the_ID(); ?> -->
		<a href="<?php the_permalink(); ?>" id="more">Read More ></a>
		<?php /* Close up the post div and then end the loop with endwhile */ ?>      
							
		<?php endwhile; ?>
</div>
        <div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore your creativity. Don’t use borders or shades. The graphic solution that you find must be the same for the other two. 
</p><a href="" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore your creativity. Don’t use borders or shades. The graphic solution that you find must be the same for the other two. 
</p><a href="" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<a href="#" id="banner" alt="Join Us" title="Join Us">Join Us</a>
    	</div>
    </div>

</div> <!--! end of #container -->

 
<?php get_footer(); ?>