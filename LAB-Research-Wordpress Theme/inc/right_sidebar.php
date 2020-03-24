<div class="content-right">
							<div class="right-sidebar-ad">
								<img src="<?php echo get_template_directory_uri(); ?>/img/300x250.jpg" alt="" />
							</div>
							
							<div class="clearfix"></div>
							
							<div class="right-sidebar-post">
							<h2>Most Popular Posts</h2>
							<?php 
	$popularpost = new WP_Query( array( 'posts_per_page' =>12, 'meta_key' => 'wpb_post_views_count','orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
							while ( $popularpost->have_posts() ) : $popularpost->the_post();
								?>	
								<article class="right-sidebar-post-single">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('rside-thumb', array('class' => 'post-thumb')); ?></a>
									<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								</article>
							<?php endwhile; ?>
							</div>
							
						</div>