<?php get_header(); ?>

<!-- Horizontal Bar Start /-->

<?php
$class = get_post_meta($post->ID, 'class', true);
?>
<div id="area-header" class="<?php echo $class; ?> gradient">
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

<div class="container bg-<?php echo $class; ?>" id="main-content">
    <div class="row">
    	<div class="three columns menu">
    		<ul>
            	<li class="green"><a href="#">consulting</a>
                   <ul>
                        <li><a href="<?php echo home_url(); ?>/adaptability-and-co-evolution">> adaptability and co-evolution</a>
                        <li><a href="<?php echo home_url(); ?>/fitness-and-performance/">> fitness and performance</a>
                        <li><a href="<?php echo home_url(); ?>/structure-and-control/">> structure and control</a>
                        <li><a href="<?php echo home_url(); ?>/learning-and-loops">> collaborative learning</a></li>
                        <li><a href="<?php echo home_url(); ?>/invention-and-innovation">> invention and innovation</a></li>
                        <li><a href="<?php echo home_url(); ?>/edge-of-chaos">> growth and edge of chaos</a></li>
                        <li><a href="<?php echo home_url(); ?>/project-management">> project management</a></li>                                                                      
                    </ul>
                </li>
               
                <li class="silver"><a href="#">technology</a>
                    <ul>
                            <li><a href="<?php echo home_url(); ?>/cloud-services">> cloud services</a></li>
                            <li><a href="<?php echo home_url(); ?>/Infrastructure-as-a-Service">> infrastructure-as-a-service</a></li>
                            <li><a href="<?php echo home_url(); ?>/Backup-as-a-Service">> backup-as-a-service</a></li>                                                        
                            <li><a href="<?php echo home_url(); ?>/unified-communications">> unified-communications</a></li>
                            <li><a href="<?php echo home_url(); ?>/private-cloud">> private cloud</a></li>
                            <li><a href="<?php echo home_url(); ?>/hybrid-cloud/">> hybrid cloud</a></li>
                            <li><a href="<?php echo home_url(); ?>/it-consulting/">> it consulting</a></li>
                            <li><a href="<?php echo home_url(); ?>/it-optimization">> it optimisation</a></li>
                   </ul>

                <li class="gold"><a href="<?php echo home_url(); ?>/investments">attractal investments</a>
                </li>
            </ul>
    	</div>
    	

    	
    	
        <div class="seven columns">
            <div id="content">
 
				<?php if ( have_posts() ) : ?>

				                <h3 class="page-title"><?php _e( 'Search Results for: ', 'hbd-theme' ); ?><span><?php the_search_query(); ?></span></h3>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-above" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-above -->
				<?php } ?>                            

				<?php while ( have_posts() ) : the_post() ?>

				                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				                    <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

				<?php if ( $post->post_type == 'post' ) { ?>
				                    <div class="entry-meta">
				                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'hbd-theme'); ?></span>
				                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
				                        <span class="meta-sep"> | </span>
				                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'hbd-theme'); ?></span>
				                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
				                    </div><!-- .entry-meta -->
				<?php } ?>

				                    <div class="entry-summary">
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
				                    </div><!-- .entry-summary -->

				<?php if ( $post->post_type == 'post' ) { ?>
				                    <div class="entry-utility">
				                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'hbd-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
				                        <span class="meta-sep"> | </span>
				                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'hbd-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
				                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hbd-theme' ), __( '1 Comment', 'hbd-theme' ), __( '% Comments', 'hbd-theme' ) ) ?></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
				                    </div><!-- #entry-utility -->
				<?php } ?>
				                </div><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-below" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-below -->
				<?php } ?>            

				<?php else : ?>

				                <div id="post-0" class="post no-results not-found">
				                    <h3 class="entry-title"><?php _e( 'Nothing Found', 'hbd-theme' ) ?></h3>
				                    <div class="entry-content">
				                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'hbd-theme' ); ?></p>
				    <?php get_search_form(); ?>
				                    </div><!-- .entry-content -->
				                </div>

				<?php endif; ?>           
 
            </div><!-- #content --></div>
            
  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="http://cdn.attractal.com/js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="http://cdn.attractal.com/js/libs/gumby.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.retina.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.fixed.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.skiplink.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.checkbox.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.radiobtn.js"></script>
  <script src="http://cdn.attractal.com/js/libs/ui/gumby.tabs.js"></script>
  <script src="http://cdb.attractal.com/js/libs/ui/jquery.validation.js"></script>
  -->
  <script src="http://cdn.attractal.com/js/libs/gumby.min.js"></script>
  <script src="http://cdn.attractal.com/js/plugins.js"></script>
  <script src="http://cdn.attractal.com/js/main.js"></script>
  <script src="http://cdn.attractal.com/js/bjqs-1.3.min.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>
