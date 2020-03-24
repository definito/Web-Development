<?php 
/*
* This is for default page Creator
*/
get_header();
?>
		  <section class="page-title service-bg">
            <div class="container">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-text">
                            <h3><?php echo ucfirst(get_the_title());?> </h3>
                        </div>
                        
                    </div>

                
                </div>
            </div>
        </section>
	
		
		<section class="gn-page padding-ok">
		
			<div class="container">
				<div class="row">
					<div class="col-md-8"><!--Main page left section start--->
					      <div class="post-title-text">
                            <h3><?php the_title();?> </h3>
                        </div>
                        <hr>
						<div class="row">
							<div class="col-md-12">

								<div class="page-content">
									
								<?php the_content();?>
								</div>
							</div>
						</div>
						
						
					</div><!--Main page left section End--->

					<div class="col-md-4"><!--Main page right sidebar section start--->
						<div class="page-sidebar">
						<!--	<div class="sidebar-widget">
								<p><input type="text" placeholder="Your email" class="form-control"></p>
							</div> -->
						
								

							<?php if( is_active_sidebar( 'widgetized-page-default-content-widget-area' ) ) : ?>
	<aside class="widgetized-page-after-content-widget-area">
		<?php dynamic_sidebar( 'widgetized-page-default-content-widget-area' ); ?>
	</aside>
<?php endif; ?>
							
						</div>

					</div><!--Main page right sidebar section end--->
					
			
				</div>
			</div>
			<?php endwhile; ?>
		</section>
			
	<?php get_footer();?>