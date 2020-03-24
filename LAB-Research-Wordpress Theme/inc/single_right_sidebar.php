		<div class="content-right">
							<div class="right-sidebar-ad">
								<img src="<?php echo get_template_directory_uri();?>/img/300x250.jpg" alt="" />
							</div>
							
							<div class="clearfix"></div>
							
							<div class="singlepage-right-sidebar-post">
							<h2>Recent Posts</h2>
							<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
								<?php while ( have_posts() ) : the_post(); ?>
								<article class="singlepage-right-sidebar-post-single">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?></a>
									<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
								</article>
								<?php endwhile; ?>
							</div>
							
						</div>