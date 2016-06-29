	</div>
	<footer class="site-footer">
		<div class="site-footer__wrapper lcw">
			<?php wp_nav_menu(array(
				'theme_location' => 'footer-nav',
				'container_class' => 'footer-nav',
				'menu_class' => 'footer-nav__wrapper'
			)); ?>
		</div>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
