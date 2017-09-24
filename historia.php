<?php
/*
* Template Name: Página de la Historia
*/
get_header();
?>
<body id="main">
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center; background-size:cover;">
	<p>Historia</p>
</header>
<!--  -->
<?php
include "menu.php";
?>
<div class="tituloConBarra">
	<h1>Historia</h1>
	<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
</div>
<div class="contenedor">
<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
        the_content();
			} // end while
		} // end if
?>
</div>

<?php get_footer();?>
