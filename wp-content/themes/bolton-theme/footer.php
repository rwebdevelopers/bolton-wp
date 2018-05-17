	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<ul class="fmenu-list">
						<li>© 2015. Your Honda Dealer </li>
						<li><a href=""> Privacy</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 fbox-right">
					<img src="<?php echo get_theme_file_uri();?>/img/pixel.png" class="img-responsive" alt="car1">
				</div>
			</div>		
		</div><!--end of container-->
		<div class="footer-menu">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						 <?php
                        wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'navbar-expand-md',
							'container_id'    => 'collapse navbar-collapse',
							'menu_class'      => 'nav navbar-nav footer-menu-list',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
                        ?>
					</div>
				</div>	
			</div>
		</div>			
	</section>	
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>