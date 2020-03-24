
			
		<footer class="uofs-footer">
    <div class="container-fluid">
        <ul class="list-inline uofs-footer-social">
            <li><a href="#" title="Follow on Facebook"><i class="uofs-icon uofs-icon-facebook"></i><span class="text-hide">Follow on Facebook</span></a></li>
            <li><a href="#" title="Follow on Twitter"><i class="uofs-icon uofs-icon-twitter"></i><span class="text-hide">Follow on Twitter</span></a></li>
            <li><a href="#" title="Follow on YouTube"><i class="uofs-icon uofs-icon-youtube"></i><span class="text-hide">Follow on YouTube</span></a></li>
            <li><a href="#" title="Follow on Instagram"><i class="uofs-icon uofs-icon-instagram"></i><span class="text-hide">Follow on Instagram</span></a></li>
            <li><a href="#" title="Follow on Flickr"><i class="uofs-icon uofs-icon-flickr"></i><span class="text-hide">Follow on Flickr</span></a></li>
        </ul><a class="uofs-footer-logo" href="#">Bangladesh University of Engineering and Technology</a>
        <p class="uofs-copyright">© TSP Research Group
            <br><a href="#">Disclaimer</a>|<a href="#">Privacy</a></p>
    </div>
</footer>

    
    <!-- jQuery form CDN -->
    <!--<script src="https://code.jquery.com/jquery.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>

    
    <!-- Bootstrap form CDN -->
   <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
  <!--  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script> -->
<!-- LimeStone Js -->
<script src="<?php echo get_template_directory_uri(); ?>/css/limestone.min.js"></script>
    <!-- jQuery sticky -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
   
    <!-- jQuery easing -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.min.js"></script>
        
    <!-- WOW Animation -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
		<!--Activating WOW Animation only for modern browser-->
		<!--[if !IE]><!-->
			<script type="text/javascript">new WOW().init();</script>
		<!--<![endif]-->		
		
		<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
		<!--[if gte IE 9]>
			<script type="text/javascript">new WOW().init();</script>
		<![endif]-->		 
		
		<!--Opacity & Other IE fix for older browser-->
		<!--[if lte IE 8]>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ie-opacity-polyfill.js"></script>
		<![endif]-->	    
    
    <!-- jQuery main script -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!--Google analytics code start-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64152716-1', 'auto');
  ga('send', 'pageview');

</script>
<!--Google analytics code end-->
    <?php wp_footer();?>
  </body>
</html>