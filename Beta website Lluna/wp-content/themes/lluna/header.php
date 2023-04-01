<!doctype html>

    <html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class( 'woocommerce' ); ?>>


	<!-- HEADER -->

		<header>

			<div class="topbar">
				
				<img class="topbar__logo" src="<?php bloginfo ( 'template_url' ); ?>/img/Lluna-logo.png"  alt="Logotipo de Lluna">

				<div class="topbar_menu_cart">
					<div class="widget_shopping_cart_content"><?php woocommerce_mini_cart();?>
				
				</div>

				<div>
					<nav>

						<div class="nav-menu">
								
								<?php
							
							wp_nav_menu ( array
							(
								'theme_location' => 'header-menu',
								'container' => false
							));
								
						?>

						</div>

					</nav>
					
				</div> 
				
			</div>

		

		</header>

		
			

		<main>