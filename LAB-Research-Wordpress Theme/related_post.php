<?php
/*
 *This is Share Button Page
 */
$titan=TitanFramework::getInstance("tf");
?>
		<section class="uofs-section uofs-article-related uofs-section-popular mtlg ptmd mblg">
    <div class="container-fluid" role="complementary">
        <h6 class="mbxs">Related</h6>
        <div class="row uofs-media-row">
	<?php
			
			$pre='fa';
			$ourCurrentPage = get_query_var('paged');
			$args = array( 'post_type' => 'news','posts_per_page' => 3 , 'order'=>'ASC','paged'=>$ourCurrentPage);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$id = get_the_ID();
			$icon_class= $titan->getOption("icon_id",$id);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
			?>
            <div class="col-xs-12 col-sm-6 col-md-3 media uofs-media-col ">

                <a href="<?php the_permalink();?>">
                    <figure class="uofs-figure uofs-article-figure mblg" style="background-image: url('<?php echo $image['0']; ?>');">
                    	
                    </figure>
                </a>
                <div class="media-body">
                    <h4 class="small"><a href="<?php the_permalink();?>">
                    	<?php the_title();?> </a>
                    </h4>
                </div>
            </div>
         <?php endwhile;?>
           

        </div>
    </div>
</section>