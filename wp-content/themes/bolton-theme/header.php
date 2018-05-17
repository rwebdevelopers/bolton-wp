<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
	<div class="header-section">
		<div class="container">
			<div class="page-header">
				 <div class="row">
				 	<div class="col-xs-12 col-sm-6 col-md-6">
				 		<div class="logo-hld">
				 			<img src="<?php echo get_theme_file_uri();?>/img/logo.png" class="log-img img-responsive">
				 		</div><!--logo-hld-->
				 		<div class="logo-text">
				 			<h2>Your Honda Dealer</h2>
				 		</div><!--logo-text-->
				 	</div>
				 	<div class="col-xs-12 col-sm-6 col-md-6">
				 		<div class="right-align hide-text">
		                  <h2>Sales: 000-000-0000</h2>
		               </div><!--left-align hide-text-->
		               <div class="right-align">
		                  <ul class="sm-list">
		                     <li><a href=""><img src=""><img src="<?php echo get_theme_file_uri();?>/img/fb.png"></a></li>
		                     <li><a href=""><img src=""><img src="<?php echo get_theme_file_uri();?>/img/tw.png"></a></li>
		                     <li><a href=""><img src=""><img src="<?php echo get_theme_file_uri();?>/img/gm.png"></a></li>
		                     <li><a href=""><img src=""><img src="<?php echo get_theme_file_uri();?>/img/lv.png"></a></li>
		                  </ul>
		               </div><!--left-align-->
				 	</div>
				 </div>       
			</div><!--end of page-header-->
		</div><!--end of container-->
	</div><!--header-section-->
	
	<div class="nav-section">
		<div class="container">
			<!-- Static navbar -->
            <nav class="navbar navbar-default">
               <div class="container-fluid">
                  <div id="navbar" class="navbar navbar-expand-md">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <div class="collapse navbar-collapse" id="myNavbar">
                        <?php
                        wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'navbar-expand-md',
							'container_id'    => 'collapse navbar-collapse',
							'menu_class'      => 'nav navbar-nav menu-list',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
                        ?>
                     </div>
                  </div>
                  <!--/.nav-collapse -->
               </div>
               <!--/.container-fluid -->
			</nav>
		</div><!--end of container-->
	</div><!--nav-section-->
