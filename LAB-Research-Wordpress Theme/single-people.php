<?php
/*
 *This is single People page
 */
$titan=TitanFramework::getInstance("tf");
?>


<?php get_header();?>
			<section class="page-title service-bg">
			<div class="container">
				<?php
			
			$id = get_the_ID();
			$subtitle = $titan->getOption("subtitle1",$id);
			$sub_title = $titan->getOption("subtitle2",$id);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full');
			?>
				<div class="row">
					<div class="col-md-12">
						<div class="page-title-text">
							<h3> Peoples   </h3>
						</div>
					</div>

				
				</div>
			</div>
		</section>
		<div class="container">
		<figure class="uofs-figure uofs-profile-img">
				<img class="marginauto" src="<?php echo $image['0']; ?>" alt="centered image" />

                 <h3 class="marginauto1"><span style="font-size: xx-large;"><strong><?php the_title(); ?></strong></span> <span style="font-size: large;"> <?php echo $subtitle ; ?></span></h3>
                 <h3 class="marginauto2"><?php echo $sub_title ; ?> </h3>
             <!-- horizontal Inline Css --> 
                <style>
				hr { 
				    display: block;
				   
				    margin-bottom: 3em;
				
				} 
				</style>
  
          <!-- horizontal Inline Css End --> 
			</figure>
			<hr>
	</div>
		
		
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="blog-post">
							
							<?php while (have_posts()):the_post();?>
							<div class="blog-post-single">
								<div class="blog-post-info">
									
									<p class="blog-author"></p>
									<div class="post-content">
										<?php the_content();?>
									</div>
									
									</div>
								</div>
								
							</div>
						<?php endwhile; ?>
					</div>
					
				</div>
			</div>

			
		
		<?php get_footer();?>