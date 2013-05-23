<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Attractal
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>
				
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'attractal' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'OOPS! No results were found for the requested archive. Please try searching for the  related content.', 'attractal' ); ?></p>
						
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

   <div class="row">
        <div class="twelve columns">
            <div id="slideshow">
            <ul id="slides" class="bjqs">
                <li>
                    <img src="img/slide_1.jpg" alt="Consulting" />
                    <div id="caption" style="float:right;">
                        <h1>Consulting <span>that transform your<br /> business to success.</span></h1>
                        <p>Description of the area of action</p>
                    </div>
                </li>
                <li>
                    <img src="img/slide_2.jpg" alt="Technology" />
                    <div id="caption">
                        <h1>Technology <span>solutions bringing your<br />  company to the front</span></h1>
                        <p>Description of the area of action</p>
                    </div>
                </li>
                <li>
                    <img src="img/slide_3.jpg" alt="Attractal Investments" />
                    <div id="caption" style="float:right;">
                        <h1>Investments <span>Knowleadgable experience<br />  at your fingertips.</span></h1>
                        <p>Description of the area of action</p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
    	<div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore your creativity. 
</p><a href="" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore your creativity. 
</p><a href="" id="more">Read More ></a>
    	</div>
        <div class="three columns news">
    		<h3>HEADLINE TEXT</h3>
            <p>This is to be used for text. We should find a nice graphic way to separate the title from the body of the text. Please don’t’ use the squares, as they are used here just to give you an idea of our needs in terms of content. Please feel free to explore your creativity. 
</p><a href="" id="more">Read More ></a>
    	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>