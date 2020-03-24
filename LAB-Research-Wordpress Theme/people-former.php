<?php get_header();
/*
 * Template Name: Former Students
 */
 $titan=TitanFramework::getInstance("tf");
?>
		<section class="page-title service-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title-text">
							<h3>Former Students</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="services padding-ok">
			<div class="container-fluid">
			<?php
			$pre='fa';
			$ourCurrentPage = get_query_var('paged');
			$args = array( 'post_type' => 'people', 'taxonomy' => 'people_categories','term' => 'former','posts_per_page' => 2 , 'order'=>'ASC','paged'=>$ourCurrentPage);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$id = get_the_ID();
			$icon_class= $titan->getOption("icon_id",$id);
			$sub_title = $titan->getOption("subtitle2",$id);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
			?>
				<div class="col-md-6">
					<div class="col-md-6">
						<div class="service-icon">
							<img src="<?php echo $image['0'];  ?>"></img>
						</div>
					</div>
					<div class="col-md-10">
						<div class="service-text">
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							<h5><?php echo $sub_title ; ?> </h5>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>

			
				<?php endwhile;

				 $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged')); ?>
       <div class="col-md-10">
         <div class="center">
        <?php
      
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));
    }
    ?>    
    </div>
</div>
<?php wp_reset_postdata();?> 

				

			</div>
		</section>
		
				
	<?php get_footer();?>