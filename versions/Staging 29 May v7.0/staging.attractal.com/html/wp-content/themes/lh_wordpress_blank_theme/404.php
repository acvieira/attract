<?php get_header(); ?>

<!-- Horizontal Bar Start /-->
<div id="area-header" class="consulting">
    <span></span>
    <div class="container">
        <div class="row">
        	<ul>
	        <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?> 
	        </ul>
        </div>
    </div>
</div>
<!-- Horizontal Bar Finish /-->

<div class="container">
    <div class="row">
    	<div class="three columns menu">
    		<ul>
            	<li class="green"><a href="">Consulting</a>
                   <ul>
                        <li><a href="#">Adaptability and Co-evolution</a>
                        <li><a href="#">Collaborative Learning and Feedback Loops </a>
                        <li><a href="#">Corporate Structure and Control </a>
                        </li>
                    </ul>
                </li>
               
                <li class="silver"><a href="#">Technology</a>
                	<ul>
                		<li><a href="#">Cloud</a></li>
                	</ul>

                <li class="gold"><a href="#">Attractal Investments</a>
                	<ul>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                   </ul>
                </li>
            </ul>
    	</div>
 <!-- Page Content Article -->   	
        <div class="seven columns">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_post(); ?>
    		<h3>OOPS! 404 Page<?php _e( 'Not Found', 'hbd-theme' ); ?></h3>
            <p>		<p><?php _e( ' This is embarrassing we seem to have misplaced the content you were looking for. Please try to search for it or return to the home page. ' ); ?><?php get_search_form(); ?></p>
		</p>
		</br>
</br>
</br>
</br>
</br>
</br>
</br>


	</div><!-- .entry-content -->
</div><!-- #post-0 -->   
 
            </div><!-- #content -->
			<?php get_sidebar(); ?>
        </div><!-- #container -->
    	</div>
    	</div>
    	
</div>   <!-- Close Container -->
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

 <?php get_sidebar(); ?>
<?php get_footer(); ?>


