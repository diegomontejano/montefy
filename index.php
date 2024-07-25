
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- head -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	<!-- head-scripts.js -->
</head>

<!-- body -->
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

	<!-- header -->
	<?php get_header(); ?>

	<!-- content -->
	 <div class="montefy-content">

	 	<!-- icons carousel -->
		<section class="montefy-carousel">
			<div class="montefy-carousel-header">
				<h2>Novidades</h2>
				<nav>
					<button class="montefy-icon-button" aria-label="voltar slide">
						<i class="icon icon-arrow-left"></i>
					</button>
					<button class="montefy-icon-button" aria-label="passar slide">
						<i class="icon icon-arrow-right"></i>
					</button>
				</nav>
			</div>

			<div class="montefy-carousel-slider">
				<div class="montefy-icon-box">
					<i class="icon icon-promo"></i>
					<h4>ATÉ 50% OFF</h4>
					<p>em peças selecionadas</p>
				</div>

				<div class="montefy-icon-box">
					<i class="icon icon-package"></i>
					<h4>FRETE GRÁTIS</h4>
					<p>acima de R$100,00</p>
				</div>

				<div class="montefy-icon-box">
					<i class="icon icon-handshake"></i>
					<h4>TROCA FÁCIL</h4>
					<p>7 dias para devolver</p>
				</div>

				<div class="montefy-icon-box">
					<i class="icon icon-shield"></i>
					<h4>COMPRA SEGURA</h4>
					<p>seus dados protegidos</p>
				</div>

				<div class="montefy-icon-box">
					<i class="icon icon-cards"></i>
					<h4>ATÉ 6X NO CARTÃO</h4>
					<p>parcelamento sem juros</p>
				</div>
			</div>
		</section>

		<!-- promo banners -->
		<section class="montefy-banners-grid">
			<a href="<?php echo get_site_url(); ?>">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/banner-retangular-1.jpg" alt="banner promocional 1">
			</a>
			<a href="<?php echo get_site_url(); ?>">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/banner-retangular-2.jpg" alt="banner promocional 2">
			</a>
			<a href="<?php echo get_site_url(); ?>">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/banner-retangular-1.jpg" alt="banner promocional 3">
			</a>
		</section>

		
	 </div>	

	<!-- footer -->
	<?php get_footer(); ?>
	<?php wp_footer(); ?>

	<!-- body-scripts.js -->
</body>
</html>