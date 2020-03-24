<?php
/**
Template Name: Home page
*/

?>
<?php get_header();?>
		


	<section id="banner" class="banner">
			<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
		</section>




		<section class="home-service padding-ok2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="sec-title">
							<h2>Our Research Goal</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<p class="p2"><span>We are studying the electronic structures of new and advanced materials. We are using synchrotron radiation to perform soft x-ray emission and absorption spectroscopy of systems like biomaterials, superconductors and transition metal compounds.</span></p>

					<p class="p2"><span>Our techniques are x-ray emission spectroscopy (XES) and x-ray absorption spectroscopy (XAS). The research is currently carried out at the Advanced Light Source synchrotron facility located in Berkeley, California and at the Canadian Light Source (CLS) in Saskatoon, Saskatchewan.</span></p>

				</div>
			</div>

		</section>


		
					 <div class="container">   
                    
						<div class="row">
							<div class="col-md-12">
						<div class="sec-title">
							<h2>Featured Videos</h2>
						</div>
					</div>
							<div class="col-md-12">

								<div class="page-content">
								  <?php if( is_active_sidebar( 'widgetized-page-post-content-widget-area' ) ) : ?>
    <aside class="widgetized-page-after-content-widget-area">
        <?php dynamic_sidebar( 'widgetized-page-post-content-widget-area' ); ?>
    </aside>
<?php endif; ?>
								</div>
							</div>
						</div>
						</div>
			
		
			

		
	<section class="uofs-section jumbotron uofs-section-bg uofs-jumbotron-OL-None uofs-section-columns" id="section-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/home-grey.jpg')">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="uofs-subsection" id="section-3-subsection-0">

                    <div class="small text-muted">

                        <h3>About the TSP Research Group,&nbsp;BUET</h3>
                        <p style="color:grey;">At the heart of BUET, on Treaty 6 territory and the homeland of the Dhaka, is the Bangladesh University of Engineering and Technology, one of Bangladesh’s top research universities.</p>

                        <ul class="list-inline uofs-cta-list">

                            <li><a class="btn btn-primary " href="about" target="_self">           

    More about Us
</a></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="uofs-subsection" id="section-3-subsection-1">

                    <div class="small text-muted">

                        <div class="uofs-index">
                            <ul class="list-unstyled mbn">
                            <?php
						wp_nav_menu(array(
							'theme_location' => 'footer-menu',
						

							
						));		
					?>	
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm"> </div>

        </div>

    </div>
</section>
	
		
	<?php get_footer();?>
