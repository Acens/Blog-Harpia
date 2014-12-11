<?php if ( is_home() ) : ?>
	<div id="pre-footer">
		<div class="container">
			<p> <img src="http://localhost/BlogHarpia/wp-content/uploads/2014/11/logo_harpia_com_desenho_antigo_vertical.png" > </p>
			<br />

			<?php et_vertex_action_button(); ?>
		</div> <!-- .container -->
	</div> <!-- #pre-footer -->
<?php endif; ?>

	<footer id="main-footer">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>

			<p id="footer-info">Desenvolvido por <img src="http://localhost/BlogHarpia/wp-content/uploads/2014/11/acenstotalmente-branco-menor.png" alt="Acens Empresa Júnior"></p>
		</div> <!-- .container -->
	</footer> <!-- #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>