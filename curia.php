<?php
/*
 * Template Name: Pagina Curia
 */
get_header();
?>
<body id="main">
	<style media="screen">
		@media screen and (max-width:500px) {
			header{
				background-image: url('<?php bloginfo("template_url") ?>/img/curiaCel.jpg')!important;
			}
		}
	</style>
	<header style="background: url('<?php bloginfo("template_url") ?>/img/curia.jpg') no-repeat center; background-size:cover;">
		<p>Curia</p>
	</header>
	<?php
		include "menu.php";
		include 'searchbar.php';
	?>			
	<div class="contenedorCrescencia">
		<div class="tituloConBarra">
			<h1>Curia</h1>
			<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
		</div>
		<div class="contenedorSingle">
			<h4>No hay información cargada.</h4>
		</div>

	</div>
		<h2 class="pieDeComentario"><i class="fa fa-comments"></i> Dejanos tu comentario </h2>

<div class="fb-comments" data-href="<?php esc_url(the_permalink()); ?>" data-width="100%" data-numposts="10" data-colorscheme="light"></div>

<?php get_footer();?>
</body>
<?php  include 'despedida.php';?>

