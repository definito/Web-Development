<?php
/**
 * Template Name: Publications
 */
?>
<?php get_header();?>
<?php
/*
 *It generates all publicaton
 */
$titan=TitanFramework::getInstance("tf");
?>


<?php get_header();?>
		<section class="page-title service-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title-text">
							<h3>Publications</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="blog-post">
							<hr style="margin-top: 30px;">
							<?php while (have_posts()):the_post();?>
							<div class="blog-post-single">
								<div class="blog-post-info">
									
									<p class="blog-author"></p>
									<div class="post-content">
										<?php the_content();?>
									</div>
									
									</div>
								</div>
								<hr>
							</div>
						<?php endwhile; ?>
					</div>
					
				</div>
			</div>
		
		<?php get_footer();?>