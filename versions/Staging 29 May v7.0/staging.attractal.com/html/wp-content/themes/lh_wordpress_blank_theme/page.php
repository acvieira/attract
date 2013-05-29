<?php get_header(); ?>

<!-- Horizontal Bar Start /-->

<?php
$class = get_post_meta($post->ID, 'class', true);
?>
<div id="area-header" class="<?php echo $class; ?> gradient">
    <span></span>
    <div class="container">
        <div class="row">
        	<ul class="<?php echo $class; ?>">
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
                            <li><a href="<?php echo home_url(); ?>/service-desk">> near shore service desk</a></li>
                   </ul>

                <li class="gold"><a href="<?php echo home_url(); ?>/investments">attractal investments</a>
                </li>
            </ul>
    	</div>
    	

    	
    	
 <!-- Page Content Article --> 
  		<div class="nine columns" id="joinus">
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
 
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>          <div class="two columns"></div>
			</div>
            </div><!-- #content -->
    	
</div>   <!-- Close Container -->
<div id="footer">
    <div id="separator" class="<?php echo $class; ?> gradient">
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