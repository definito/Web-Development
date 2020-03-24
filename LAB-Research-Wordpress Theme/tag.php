<?php
/*
 *This is Tag counter page
 */
?>
<?php get_header();?>
        
            <section class="page-title service-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      
                        <div class="page-title-text">
                            <h3>Tag: <?php single_tag_title('', true) ?></h3>
                        </div>
                        
                    </div>

                
                </div>
            </div>
        </section>
        
        <section class="blog-page padding-ok">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                       
                        <div class="blog-post">
                            <div class="blog-post-single">
                             <h1><?php single_tag_title('Showing posts from Tag : ', true) ?> </h1>
                            
                            <?php while (have_posts()):the_post();?>
                            
                                <div class="blog-post-info">
                                    <h2 class="blog-post-title" ><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    <p class="blog-author">written by: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> || on the <?php the_time('dS,F,Y'); ?></p>
                                    <div class="post-content">
                                        
                                   <?php the_excerpt();?>
                                    </div>
                        
                                    <div class="post-cat">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                            
                        <?php endwhile; ?>
                        </div>
                    </div>
                    <hr>
                    <!-- Comment Area -->
                  
                    </div>
                    <div class="col-md-4">
                        <div class="page-sidebar">
                        <!--    <div class="sidebar-widget">
                                <p><input type="text" placeholder="Your email" class="form-control"></p>
                            </div> -->
                            

                            <?php if( is_active_sidebar( 'widgetized-page-default-content-widget-area' ) ) : ?>
    <aside class="widgetized-page-deafult-content-widget-area">
        <?php dynamic_sidebar( 'widgetized-page-default-content-widget-area' ); ?>
    </aside>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer();?>