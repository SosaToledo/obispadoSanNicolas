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
				background-image: url('<?php bloginfo("template_url") ?>/img/crescenciaCel.jpg')!important;
			}
		}
	</style>
	<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/mariacrescencia.jpg') no-repeat center; background-size:cover;">
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
	</div>
		<h2 class="pieDeComentario"><i class="fa fa-comments"></i> Dejanos tu comentario </h2>

<div class="fb-comments" data-href="<?php esc_url(the_permalink()); ?>" data-width="100%" data-numposts="10" data-colorscheme="light"></div>

<?php get_footer();?>
<?php  include 'despedida.php';?>
