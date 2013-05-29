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
            
				<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
					</div><!-- .entry-utility -->
					
					<div class="entry-utility">
					                    <?php printf( __( 'This entry was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'hbd-theme' ),
					                        get_the_category_list(', '),
					                        get_the_tag_list( __( ' and tagged ', 'hbd-theme' ), ', ', '' ),
					                        get_permalink(),
					                        the_title_attribute('echo=0'),
					                        comments_rss() ) ?>

					<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Comments and trackbacks open ?>
					                        <?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'hbd-theme' ), get_trackback_url() ) ?>
					<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Only trackbacks open ?>
					                        <?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'hbd-theme' ), get_trackback_url() ) ?>
					<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Only comments open ?>
					                        <?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'hbd-theme' ) ?>
					<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
					                        <?php _e( 'Both comments and trackbacks are currently closed.', 'hbd-theme' ) ?>
					<?php endif; ?>
					<?php edit_post_link( __( 'Edit', 'hbd-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
                </div><!-- #post-<?php the_ID(); ?> -->           
 
                <div id="nav-below" class="navigation">
						<?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?> <span style="color: #bbb;">&#8226;</span> <?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?>
				</div><!-- #nav-below -->     
            
 				<?php comments_template('', true); ?>
       
 
            </div><!-- #content -->
			<?php get_sidebar(); ?>
        </div><!-- #container -->
    	</div>
    	</div>
    	
</div>   <!-- Close Container -->

        <div id="container">
            <div id="content"> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>