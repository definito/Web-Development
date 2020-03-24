<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="rtCpxrWSrZ9rPuUtglMbkiqqJACKUc9iyy_2DB9R4Ow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?> <?php wp_title();?></title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>

    <!-- Bootstrap css form cdn -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css"> -->
    <!--LimeStone Css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/limestone.min.css">
    
    <!-- Font awesome css -->
<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css"> 
    
	<!--Animation css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">  
	
	<!--Portfolio hover css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/set2.css">
    
    <!-- Main CSS file. Caution don't make edition if it is extremely necessary -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">    
	
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
    </head>
  
    <body>
		<header class="uofs-header">
			<div class="uofs-header-masthead" role="banner">
					<a class="uofs-header-crest" href="<?php echo home_url(); ?>">TSP Reaserch Group</a>
     <a class="uofs-header-sitename" href="<?php echo home_url(); ?>">TSP Research Group</a>
  
      </div>










<div class="uofs-offcanvas">
    <button class="btn btn-sm btn-default uofs-offcanvas-toggle" type="button">Menu</button>

    <div class="uofs-offcanvas-inner">
      <!-- Basic navbar -->
      <nav class="navbar navbar-default" role="navigation">
          
      	<?php
						wp_nav_menu(array(
							'theme_location' => 'header-menu',
							'container'=>'div',
							'container_class'=>'container-fluid',
						  'menu_class'=>'nav navbar-nav navbar-left',
							'depth'=> '7',
                            'fallback_cb'=>'WP_Bootstrap_Navwalker::fallback',
                            'walker'=>new WP_Bootstrap_Navwalker()

							
						));		
					?>	
  
      </nav>

    </div>
  </div>
      
     <!-- Off-canvas wrapper -->




			
		</header>