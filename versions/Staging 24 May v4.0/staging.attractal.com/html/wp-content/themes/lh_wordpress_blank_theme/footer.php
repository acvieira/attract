    <div class="moreFooter">
            <div class="container">
                <div class="row">
                    <a href="#" id="toogleFooter">open</a>
                </div>
            </div>
        </div>
    <div id="panel">
        <div class="category-list">
            <div class="container">
                <div class="row">
                    <div class="three columns">
                        <h3>ATTRACTAL</h3>
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/about">About us - GENOTYPE</a></li>
                            <li><a href="<?php echo home_url(); ?>/mission-statement">Mission Statement</a></li>
                            <li><a href="<?php echo home_url(); ?>/services">Services - PHENOTYPE</a></li>
                            <li><a href="<?php echo home_url(); ?>/alumni">Alumni</a></li>
                            <li><a href="<?php echo home_url(); ?>/insights">Insights</a></li>
                            <li><a href="<?php echo home_url(); ?>/contacts">Contacts</a></li>
                            <li><a href="<?php echo home_url(); ?>/feeds">Feeds</a></li>
                        </ul>
                    </div>
                    <div class="three columns">
                        <h3>CONSULTING</h3>
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/adaptability-and-co-evolution">Corporate Adaptability and Co-evolution</a></li>
                            <li><a href="<?php echo home_url(); ?>/fitness-and-performance">Corporate Fitness and Performance</a></li>
                            <li><a href="<?php echo home_url(); ?>/structure-and-control">Corporate Structure and Control </a></li>
                            <li><a href="<?php echo home_url(); ?>/learning-and-loops">Corporate Collaborative Learning and Feedback Loops </a></li>
                        </ul>
                    </div>       
                    <div class="three columns">
                        <h3>TECHNOLOGY</h3>
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/">Cloud Services</a></li>
                            <li><a href="<?php echo home_url(); ?>/">IT Consulting</a></li>
                            <li><a href="<?php echo home_url(); ?>/<?php echo home_url(); ?>/">IT Optimisation</a></li>
                            <li><a href="<?php echo home_url(); ?>/">Near Shore Service Desk IT Support</a></li>
                        </ul>
                    </div>
                    <div class="three columns">
                        <h3>INVESTMENTS</h3>
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/">Item 1</a></li>
                            <li><a href="<?php echo home_url(); ?>/">Item 2</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer2">
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
        </div>
    </div>
</div>

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="http://staging2.attractal.com/js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="http://staging2.attractal.com/js/libs/gumby.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.retina.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.fixed.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.skiplink.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.checkbox.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.radiobtn.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/gumby.tabs.js"></script>
  <script src="http://staging2.attractal.com/js/libs/ui/jquery.validation.js"></script>
  -->
  <script src="http://staging2.attractal.com/js/libs/gumby.min.js"></script>
  <script src="http://staging2.attractal.com/js/plugins.js"></script>
  <script src="http://staging2.attractal.com/js/main.js"></script>
  <script src="http://staging2.attractal.com/js/bjqs-1.3.min.js"></script>

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

    </div><!-- #content -->

	<?php get_sidebar(); ?>
 
</div><!-- #container -->