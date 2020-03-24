<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name');?> <?php wp_title();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta content='' name='Author'/>
<meta content='.com' name='Email'/>
<meta content='' name='copyright'/>
<meta content='English' name='language'/>
<meta content='document' http-equiv='Resource-Type'/>
<meta content='all' name='audience'/>
<meta content='general' name='rating'/>
<meta content='all' name='robots'/>
<meta content='index, follow' name='robots'/>
<meta content='global' name='distribution'/>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" media="screen">  
	
	<!--wordpress core stylesheet-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/default.css" rel="stylesheet" media="screen">
	<link href="<?php echo get_template_directory_uri(); ?>/css/nav.css" rel="stylesheet" media="screen">
	<!--Main stylesheet-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
     <!--this js file for active all jquery plugin-->
    <?php wp_head();?>
   
  </head>
  <body>
  
 

	<header>
		<div class="row">
			<div class="container">
				<div class="..col-xs-12">
					<div class="header-full">
						<div class="header-ad-full">
							<div class="header-ad">
								<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/adv.gif" alt="" /></a>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="logo">
									<a href="<?php bloginfo('home');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Coloriva" /></a>
							</div>	

							<div class="search-top">
								<?php dynamic_sidebar('search');?>
							</div>							
							
						</div>
						
						<div class="clearfix"></div>
						
						<div class="menu-full">
							<div class="header menu-top main-navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary-menu') ); ?>
							</div>
						</div>
						
						<div class="clearfix">
							<div class="breadcum">
								<div class="breadcrumbs">
						 		   <?php if(function_exists('bcn_display'))
						  			  {
						     				   bcn_display();
									    }?>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!--end herader option-->