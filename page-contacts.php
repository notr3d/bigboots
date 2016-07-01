<?php get_header(); ?>
<div class="content-area">
	<main class="contacts">
		<div class="contacts__wrapper lcw">
			<h1 class="page-header"><span>Контакты</span></h1>
			<form action="" class="contacts__form">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="email" name="email" placeholder="Эл. почта" required>
				<input type="tel" name="tel" placeholder="Телефон">
				<textarea name="message" rows="5" placeholder="Сообщение"></textarea>
				<input type="submit">
			</form>			
		</div>
		<div id="contacts-map" class="contacts__map"></div>
	</main>
</div>
<?php get_footer(); ?>
