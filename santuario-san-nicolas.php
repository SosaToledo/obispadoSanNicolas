<?php
/*
* Template Name: Página del Santuario: virgen del rosario
*/
get_header();
?>
<body id="main">

<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/santuariocel.jpg')!important;
  }
}
</style>
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/santuariomaria.jpg') no-repeat center; background-size:cover;">
	<p>Santuario Maria del Rosario de San Nicolas</p>
</header>
<!--  -->
<?php
include "menu.php";
include 'searchbar.php';

?>

<div class="contenedorSingle" style="margin-top:20px;">
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

<div class="fb-comments" data-href="<?php esc_url(the_permalink()); ?>" data-width="100%" data-numposts="10" data-colorscheme="light"></div>

<?php get_footer();?>
<?php  include 'despedida.php';?>
