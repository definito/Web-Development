<?php
/*
 *This is single-publication type post page
 */
$titan=TitanFramework::getInstance("tf");
?>

<!--- For Author name -->
<?php while (have_posts()):the_post();
$author_name = get_the_author();
	?>				
<?php endwhile; ?>
<!--- For Author name end  -->	
<?php get_header();?>
			<section class="gn-page padding-ok">
			
				<?php
			
			$id = get_the_ID();
			$subtitle = $titan->getOption("sub_title",$id);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full');
			?>
				
		
		
		<div class="container">
		<figure class="uofs-figure uofs-profile-img">
			<div class="col-md-10 col-md-offset-1">
				<img  src="<?php echo $image['0']; ?>" alt="centered image" />
              </div>
                 <h3 class="marginauto1p"><span style="color:#9ebb00;font-size: xx-large;line-height: 54px;"><strong><?php the_title(); ?></strong></span>
                  <span style="font-size: large;"></span>
                 </h3>
                 <h3 class="marginauto2p"><?php echo $subtitle ; ?> </h3>
                 <h4 class="marginauto2p">written by: <?php echo $author_name; ?> || on the <?php the_time('dS,F,Y'); ?></h4>

                 <hr>
                 <style>
hr { 
    display: block;
    margin-bottom: 1em;   
} 
</style>



	</figure>
</div>

			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="blog-post">
							<?php while (have_posts()):the_post();?>
							<div class="blog-post-singlep">
								
								<div class="blog-post-info">
									
									<div class="post-content">
										<?php the_content();?>
									</div>
						
									
								</div>
							</div>
						<?php endwhile; ?>

		<!-- Share Button IFrame -->				

<!--Share Button Area End -->
		
					</div>
					
					<!-- Comment Area -->
					
					</div>
				<?php get_template_part('shrae_button')?>
				</div>

			</div>

<?php get_template_part('related_post')?>
		</section>
		<?php get_footer();?>