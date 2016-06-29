<?php get_header(); ?>
	<div class="content-area">
		<main class="home">
			<div class="home-slider">
				<div class="home-slider__wrapper">
					<div class="home-slider__item">
						<div class="home-slider__container">
							<h2 class="home-slider__header">lorem</h2>
							<p class="home-slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis neque molestiae quo atque suscipit soluta nemo, eveniet obcaecati labore sapiente qui necessitatibus dolor at eius dolorum veniam aliquam! Dicta, maiores!</p>
							<a href="" class="home-slider__link">lorem</a>
						</div>
					</div>
					<div class="home-slider__item">
						<div class="home-slider__container">
							<h2 class="home-slider__header">lorem</h2>
							<p class="home-slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis neque molestiae quo atque suscipit soluta nemo, eveniet obcaecati labore sapiente qui necessitatibus dolor at eius dolorum veniam aliquam! Dicta, maiores!</p>
							<a href="" class="home-slider__link">lorem</a>
						</div>
					</div>
				</div>
			</div>
			<?php echo do_shortcode( '[featured_products per_page="12" columns="4"]' ); ?>
		</main>
	</div>
<?php get_footer(); ?>
