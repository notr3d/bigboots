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
<?php if (is_page($page = "Контакты")): ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-vOBdjVqwgHav99Lw79O25RL04z5pq2c"
  type="text/javascript"></script>
<script>
	var center = new google.maps.LatLng(55.736095, 37.718121);
	var init = function(){
		var prop = {
			center: center,
			scrollwheel: false,
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('contacts-map'), prop);
		var marker = new google.maps.Marker({
			position: center,
			icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
			size: new google.maps.Size(20, 32)
		});
		marker.setMap(map);
	};
	google.maps.event.addDomListener(window, 'load', init);
</script>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
