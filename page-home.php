<?php get_header(); ?>
<div class="content-area">
	<main class="home">
		<div class="home-slider">
			<div class="home-slider__wrapper">
				<div class="home-slider__item home-slider__item--1">
					<div class="home-slider__container">
						<h2 class="home-slider__header">lorem</h2>
						<p class="home-slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis neque molestiae quo atque suscipit soluta nemo, eveniet obcaecati labore sapiente qui necessitatibus dolor at eius dolorum veniam aliquam! Dicta, maiores!</p>
						<a href="shop" class="home-slider__link">lorem</a>
					</div>
				</div>
				<div class="home-slider__item home-slider__item--2">
					<div class="home-slider__container">
						<h2 class="home-slider__header">lorem</h2>
						<p class="home-slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis neque molestiae quo atque suscipit soluta nemo, eveniet obcaecati labore sapiente qui necessitatibus dolor at eius dolorum veniam aliquam! Dicta, maiores!</p>
						<a href="shop" class="home-slider__link">lorem</a>
					</div>
				</div>
			</div>
		</div>
		<div class="featured-products">
			<div class="featured-products__wrapper lcw">
				<h2 class="page-header"><span>Новые поступления</span></h2>
				<?php echo do_shortcode( '[featured_products per_page="8" columns="3"]' ); ?>
			</div>			
		</div>
		<div class="prod-cat">
			<div class="prod-cat__wrapper lcw">
				<h2 class="page-header"><span>Категории</span></h2>
				<div class="prod-cat__container">
					<div class="prod-cat__item">
						<div class="prod-cat__inner">
							<a href="men" class="prod-cat__link prod-cat__link--men">men</a>
						</div>
					</div>
					<div class="prod-cat__item">
						<div class="prod-cat__inner">
							<a href="women" class="prod-cat__link prod-cat__link--men">women</a>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>
