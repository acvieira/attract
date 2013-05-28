<?php get_header(); ?>    
    <div class="row">
        <div class="twelve columns">
            <div id="slideshow">
            <ul id="slides" class="bjqs">
                <li>
                    <img src="http://cdn.attractal.com/img/slide_1.jpg" alt="Consulting" />
                    <div id="caption" style="float:right;">
                        <h1>consulting <span>that transform your<br /> business to success.</span></h1>
                        <p><a href="/consulting">more information</a></p>
                    </div>
                </li>
                <li>
                    <img src="http://cdn.attractal.com/img/slide_2.jpg" alt="Technology" />
                    <div id="caption">
                        <h1>technology <span>solutions bringing your<br />  company to the front</span></h1>
                        <p>more information</p>
                    </div>
                </li>
                <li>
                    <img src="http://cdn.attractal.com/img/slide_3.jpg" alt="Attractal Investments" />
                    <div id="caption" style="float:right;">
                        <h1>investments <span>knowledgeable experience<br />  at your fingertips.</span></h1>
                        <p>more information</p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
    	<div class="three columns news">
    		<h3>News</h3>
            <p>
        <?php query_posts('orderby=date&order=desc&cat=4&showposts=4'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" target="blank"> * <?php the_title(); ?></a></br>
        <?php endwhile;?></p>	
		</div>
        <div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ 				use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore 			your creativity. 
            </p><a href="" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ 			use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore your 			creativity. 
            </p><a href="" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<a href="alumni" id="banner" alt="Join Us" title="Join Us">Join Us</a>
    	</div>
    </div>

</div> <!--! end of #container -->
<div id="footer">
    <div id="separator" class="consulting gradient">
        <div class="container">
            <div class="row">
                <div class="four columns">&copy; 2013 ATTRACTAL, Inc. All Rights Reserved.</div>
                <div class="eight columns">
                    <ul class="footer-links">
                        <li><a href="<?php echo home_url(); ?>/terms">Terms of Use</a></li>
                        <li><a href="<?php echo home_url(); ?>/privacy">Privacy Policy</a></li>
                        <li><a href="<?php echo home_url(); ?>/sitemap">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <span></span>
    </div>
 
<?php get_footer(); ?>