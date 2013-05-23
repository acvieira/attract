<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Attractal
 * @since Attractal 1.0
 */
?>
<div id="footer">
    <div id="separator" class="consulting">
        <div class="container">
            <div class="row">
                <div class="four columns">&copy; 2013 ATTRACTAL, Inc. All Rights Reserved.</div>
                <div class="eight columns">
                    <ul class="footer-links">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <span></span>
    </div>
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
                        <h3>Category List</h3>
                        <ul>
                            <li><a href="#">About us - GENOTYPE</a></li>
                            <li><a href="#">Services - PHENOTYPE</a></li>
                            <li><a href="#">Alumni</a></li>
                            <li><a href="#">Insights</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Feeds</a></li>
                        </ul>
                    </div>
                    <div class="three columns">
                        <h3>CONSULTING</h3>
                        <ul>
                            <li><a href="#">Corporate Adaptability and Co-evolution</a></li>
                            <li><a href="#">Corporate Fitness and Performance</a></li>
                            <li><a href="#">Corporate Structure and Control </a></li>
                            <li><a href="#">Corporate Collaborative Learning and Feedback Loops </a></li>
                        </ul>
                    </div>       
                    <div class="three columns">
                        <h3>TECHNOLOGY</h3>
                        <ul>
                            <li><a href="#">Cloud Services</a></li>
                            <li><a href="#">IT Consulting</a></li>
                            <li><a href="#">IT Optimisation</a></li>
                            <li><a href="#">Near Shore Service Desk IT Support</a></li>
                        </ul>
                    </div>
                    <div class="three columns">
                        <h3>INVESTMENTS</h3>
                        <ul>
                            <li><a href="#">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                            <li><a href="#">Item 3</a></li>
                            <li><a href="#">Item 4</a></li>
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
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="js/libs/gumby.js"></script>
  <script src="js/libs/ui/gumby.retina.js"></script>
  <script src="js/libs/ui/gumby.fixed.js"></script>
  <script src="js/libs/ui/gumby.skiplink.js"></script>
  <script src="js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="js/libs/ui/gumby.checkbox.js"></script>
  <script src="js/libs/ui/gumby.radiobtn.js"></script>
  <script src="js/libs/ui/gumby.tabs.js"></script>
  <script src="js/libs/ui/jquery.validation.js"></script>
  -->
  <script src="js/libs/gumby.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bjqs-1.3.min.js"></script>

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


<?php wp_footer(); ?>
  </body>
</html>
