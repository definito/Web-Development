<?php
/*
 *This is single blog page
 */
?>
<?php get_header();?>
        
      <section class="page-title service-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-text">
                            <h3>404 Error</h3>
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

                            
                            
                                <div class="blog-post-info"> 


                                    <h1>Error-404 Not Found! </h1>
                                    
                                    <div class="post-content">
                                        <hr>
                                  
                                    </div>
                        
                                   
                                      
                                    </div>
                                </div>
                            
                       
                        
                        </div>
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
                    <!-- Comment Area -->
                  
              
                </div>
            </div>
        </section>
        <?php get_footer();?>