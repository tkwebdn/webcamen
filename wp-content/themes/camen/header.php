<?php
/**
 * The header.
 */
?>
<!doctype html>
<html itemscope="" itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
	<div class="header-main">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo site_url()?>"><img width="180px" src="<?php echo ASSETS_URI?>/images/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="search-form-wrap">
						<form class="search-form" method="GET" action="<?php echo site_url()?>">
							<div class="search-form-inner">
								<input name="s" type="text" class="search-input" placeholder="Tìm sản phẩm" autocomplete="off">
								<button class="search-button"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="header-right">
						<li class="user-icon"><a href=""><i class="fas fa-user"></i></a></li>
						<li class="cart-icon">
							<a href=""><i class="fas fa-cart-shopping"></i></a>
							<span class="cart-number">0</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="menu-wrap">
		<div class="container">
		<?php 
			wp_nav_menu( 
				array(  
					'theme_location' => 'primary',
					'menu_id'        => 'main-menu', 
					'menu_class' => 'main-menu',
				) 
			);
		?>
		</div>
	</div>
</header>	