<?php
/*
 * Template Name: Pagina Crescencia
 */
get_header();
?>
<body id="main">
	<style media="screen">
		@media screen and (max-width:500px) {
			header{
				background-image: url('<?php bloginfo("template_url") ?>/img/mariacrescencia.jpg')!important;
			}
		}
	</style>
	<header style="background: url('<?php bloginfo("template_url") ?>/img/mariacrescencia.jpg') no-repeat center; background-size:cover;">
		<p>Crescencia</p>
	</header>
	<?php
		include "menu.php";
		include 'searchbar.php';
	?>			
	<div class="contenedorCrescencia">
		<div class="tituloConBarra">
			<h1>Beata Crescencia</h1>
			<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
		</div>
		<div class="contenedorSingle">
			<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
					the_content();
						} // end while
					} // end if
			?>
		</div>

		<h2 class="pieDeComentario"><i class="fa fa-comments"></i> Dejanos tu comentario </h2>

		<div class="fb-comments" data-href="
			<?php $host= $_SERVER['HTTP_HOST'];
			$url= $_SERVER['REQUEST_URI'];
			echo 'http://' . $host . $url;
			?>
			" data-numposts="5" colorscheme="dark">
		</div>
<?php get_footer();?>
