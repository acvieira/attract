<?php get_header(); ?>    
    <div class="row">
        <div class="twelve columns">
            <div id="slideshow">
            <ul id="slides" class="bjqs">
                <li>
                    <img src="http://cdn.attractal.com/img/slide_1.jpg" alt="Consulting" />
                    <div id="caption" class="green">
                        <h1>consulting <span>that transform your<br /> business to success.</span></h1>
                        <p><a href="/consulting" class="green">more information</a></p>
                    </div>
                </li>
                <li>
                    <img src="http://cdn.attractal.com/img/slide_2.jpg" alt="Technology" />
                    <div id="caption" class="silver">
                        <h1>technology <span>solutions bringing your<br />  company to the front</span></h1>
                        <p><a href="/consulting" class="silver">more information</a></p>
                    </div>
                </li>
                <li>
                    <img src="http://cdn.attractal.com/img/slide_3.jpg" alt="Attractal Investments" />
                    <div id="caption" class="gold">
                        <h1>investments <span>knowledgeable experience<br />  at your fingertips.</span></h1>
                        <p><a href="/consulting" class="gold">more information</a></p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
    	<div class="three columns news">
    		<h3>news</h3>
            <p>
        <?php query_posts('orderby=date&order=desc&cat=4&showposts=1'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" target="blank"> * <?php the_title(); ?></a></br>
        <?php endwhile;?></p>	
        <a href="<?php echo home_url(); ?>/insights" id="more">Read More ></a>
		</div>
        <div class="three columns news">
    		<h3>consulting</h3>
            <p>ATTRACTAL envisions every corporation, and its environment, through the holistic lens of Complex Adaptive Systems.
            </p><a href="<?php echo home_url(); ?>/consulting" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<h3>investments</h3>
            <p>ATTRACTAL INVESTMENTS assists corporations in finding investment opportunities that reenforce their capacity to adapt their and co-evolve in an ever-changing economy. 
            </p><a href="<?php echo home_url(); ?>/investments" id="more">Read More ></a>
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