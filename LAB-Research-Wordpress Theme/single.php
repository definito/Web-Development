<?php
/*
 *This is single People page
 */
$titan=TitanFramework::getInstance("tf");
?>


<?php get_header();?>
          
        <section class="page-title service-bg">
            <div class="container">
            
                <div class="row">
                    <div class="col-md-12">
                        <?php while (have_posts()):the_post();?>
                        <div class="page-title-text">
                            <h3><?php the_title();?> </h3>
                        </div>
                        
                    </div>

                
                </div>
            </div>
        </section>
    
        
    <section class="gn-page padding-ok">    
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-post">
                        
                            
                            <div class="blog-post-single">
                                 <div class="post-title-text">
                            <h3><?php the_title();?> </h3>
                        </div>
                        <hr>
                                <div class="blog-post-info">
                                   
                                    
                                    <p class="blog-author"></p>
                                    <div class="post-content">
                                        <?php the_content();?>
                                    </div>
                                    
                                    </div>
                                </div>
                                <hr>
                            </div>
                       
                    </div>

                            <div class="col-md-4"><!--Main page right sidebar section start--->
                        <div class="page-sidebar">
                        <!--    <div class="sidebar-widget">
                                <p><input type="text" placeholder="Your email" class="form-control"></p>
                            </div> -->
                        
                                

                            <?php if( is_active_sidebar( 'widgetized-page-video-content-widget-area' ) ) : ?>
    <aside class="widgetized-page-after-content-widget-area">
        <?php dynamic_sidebar( 'widgetized-page-video-content-widget-area' ); ?>
    </aside>
<?php endif; ?>
                            
                        </div>

                    </div><!--Main page right sidebar section end--->
                     <?php endwhile; ?>
                      <div class="col-md-8">
                    <?php comments_template(); ?>
                </div>
                    
                </div>
            </div>
        </section>
        <?php get_footer();?>