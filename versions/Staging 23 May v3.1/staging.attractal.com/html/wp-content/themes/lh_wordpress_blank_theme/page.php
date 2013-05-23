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

                <li class="gold"><a href="#">Attractal Investments</a></li>
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
    		<h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <a href="" id="more" ></a>
            
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
<?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           
 
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>          
 
            </div><!-- #content -->
			<?php get_sidebar(); ?>
        </div><!-- #container -->
    	</div>
    	</div>
    	
</div>   <!-- Close Container -->

 <?php get_sidebar(); ?>
<?php get_footer(); ?>