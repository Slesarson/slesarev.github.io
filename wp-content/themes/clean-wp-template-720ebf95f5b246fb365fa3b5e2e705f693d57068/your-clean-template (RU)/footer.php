<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
?>
<footer>
		<div class="container">
			<hr>
			<p>Сайт разработан студией IS ART</p>
		</div>
	</footer>

	<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/scroll.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/ap.js"></script>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>