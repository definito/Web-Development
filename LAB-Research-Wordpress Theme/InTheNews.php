

<?php
/*
 *Template Name:In the News
 */
$titan=TitanFramework::getInstance("tf");
?>

<?php get_header();?>
		
		<section class="page-title service-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title-text">
							<h3>In The news</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<style>
hr { 
    display: block;
   
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: .5px;
} 
</style>
		
		<section class="services padding-ok">
			<div class="container">

			<?php
			$pre='fa';
			$ourCurrentPage = get_query_var('paged');
			$args = array( 'post_type' => 'news','posts_per_page' => 5 , 'order'=>'ASC','paged'=>$ourCurrentPage);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$id = get_the_ID();
			$icon_class= $titan->getOption("icon_id",$id);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
			?>
				<div class="">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-10">
						<div class="service-text">
							 <p>Written by: <?php echo get_the_author(); ?> || on the <?php the_time('dS,F,Y'); ?></p>
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							<?php the_excerpt(); ?>
							<hr>
						</div>
					</div>
				</div>
				<?php endwhile;
$total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

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

<?php wp_reset_postdata();?> 


			</div>
		</section>
				
	<?php get_footer();?>