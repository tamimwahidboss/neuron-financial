<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?> >
	<?php wp_body_open(); ?>
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<!-- start top bar -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">
								<p>
									<i class="fa fa-phone"></i>
									<?php echo get_theme_mod('tw_neuron_topHead_num'); ?>
								</p>
								<p>
									<i class="fa fa-envelope"></i>
									<a href="#"><?php echo get_theme_mod('tw_neuron_topHead_email'); ?></a>
								</p>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						
						<div class="col-sm-4">
							<div class="social-icon">
								<ul>
									<li><a href="<?php echo get_theme_mod('tw_neuron_topHead_fb'); ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo get_theme_mod('tw_neuron_topHead_x'); ?>"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo get_theme_mod('tw_neuron_topHead_lk'); ?>"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo get_theme_mod('tw_neuron_topHead_gg'); ?>"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="<?php echo get_theme_mod('tw_neuron_topHead_tumblr'); ?>"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->
			
	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">
	            <!-- Start Top Search -->
	            <div class="top-search">
					<div class="container">
						<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
								<input type="text" class="form-control" name="s" id="s" placeholder="Search" value="<?php the_search_query(); ?>">
								<span class="input-group-addon close-search" id="searchsubmit" type="submit">
									<i class="fa fa-times"></i>
								</span>
							</div>
						</form>
					</div>
				</div>
	            <!-- End Top Search -->

	            <div class="container">
	                <!-- Start Atribute Navigation -->
	                <div class="attr-nav">
	                    <ul>
	                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
	                        <!-- <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
	                                <i class="fa fa-shopping-bag"></i>
	                                <span class="badge">2</span>
	                            </a>
	                            <ul class="dropdown-menu cart-list">
	                                <li>
	                                    <a href="#" class="photo"><img src="assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim SlimFit Shirt </a></h2>
	                                    <p>2x - <span class="price">$19.99</span></p>
	                                </li>
	                                <li>
	                                    <a href="#" class="photo"><img src="assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim Polo Shirt</a></h2>
	                                    <p>2x - <span class="price">$12.99</span></p>
	                                </li>
	                                <li class="total">
	                                    <span class="pull-right"><strong>Total</strong>: $320.00</span>
	                                    <a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
	                                </li>
	                            </ul>
	                        </li> -->
	                    </ul>
	                </div>
	                <!-- End Atribute Navigation -->

	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod('tw_neuron_logo'); ?>" class="logo logo-scrolled" alt=""></a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">
	                    <?php
							$tw_neuron_nav = array(
								'theme_location' => 'menu-1',
								'menu_class' => 'nav navbar-nav navbar-right',
							);
							wp_nav_menu($tw_neuron_nav);
						?>
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header>
		<!-- end header -->