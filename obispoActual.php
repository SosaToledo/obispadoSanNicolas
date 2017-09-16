<?php
/*
	 * Template Name: Página del obispo actual
	 *
 */
get_header();
include "menu.php";?>
	<img class="imgLupa" src="<?php bloginfo('template_url')?>/img/iconos/lupa.png">
	<div class="tituloConBarra">
			<h1>Obispo Actual</h1>
			<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
			<h1>Mons. Hugo Norberto Santiago</h1>
	</div>
	<div class="contenedorObispoActual">
	<?php
		// obispoActual id 33 -Frank
		//id 8 -web
		query_posts('cat=8');
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
					} // end while
			} // end if
	?>
	</div>
</body>
<?php get_footer();?>
