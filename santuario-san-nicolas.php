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
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center; background-size:cover;">
	<p>Santuario Maria del Rosario de San Nicolas</p>
</header>
<!--  -->
<?php
include "menu.php";
?>
<div class="tituloConBarra">
	<h1>Santuario Maria del Rosario de San Nicola</h1>
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


<div class="fb-comments" data-href="
<?php $host= $_SERVER['HTTP_HOST'];
$url= $_SERVER['REQUEST_URI'];
echo 'http://' . $host . $url;
?>
" data-numposts="5" colorscheme="dark"></div>


<?php get_footer();?>
