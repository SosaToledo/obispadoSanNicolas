<?php
/**
 * The template for displaying all pages
 *
 *
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */
get_header();?>
<body id="main">
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celunoticias.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/noticias.jpg') no-repeat center; background-size:cover;">
	<p style="color:white; font-size:4.5em; font-family:verdana;width:60%;text-decoration:none;border-bottom:8px solid white">Busqueda</p>
</header>
<?php
include "menu.php";
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorObispos">
					<a href="<?php the_permalink();?>"><h2 class="tituloPageObispos"><?php the_title() ?></h2></a>
					<?php the_excerpt(); ?>
				</div>
				<?php
			} // end while
		}else {
			?><h1>No se encontraron resultados</h1><?php
		}
?>


<?php get_footer();?>
