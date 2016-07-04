<?php get_header(); ?>
<div class="content-area">
	<main class="my-cart">
		<div class="my-cart__wrapper lcw">
			<?php echo do_shortcode( '[woocommerce_cart]' ); ?>
		</div>
	</main>
</div>
<?php get_footer(); ?>
