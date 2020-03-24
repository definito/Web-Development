	
	<footer>
		<div class="row footer-full">
			<div class="container">
				<div class="..col-xs-12">
					<div class="menu-footer">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu') ); ?>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="footer-bottom">
						<div class="footer-logo">
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Coloriva" /></a>
						</div>
						
						<div class="clearfix"></div>
						
						<div class="footer-text">
							<p>Copyright &copy;<?php echo date("Y"); ?> <a href="<?php bloginfo('home');?>"><?php bloginfo('name');?></a></p>
						</div>					
					</div>					
					
				</div>			
			</div>			
		</div>			
	</footer>
	
	<?php wp_footer(); ?>
	
  </body>
</html>