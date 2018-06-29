<?php
/*
	 * Template Name: Página del En Construcción
	 *
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
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center; background-size:cover;">
	<p style="color:black">Obispado de San Nicolas</p>
</header>

<!--  -->
<?php
include "menu.php";
?>
<div id="notfound" style="width:100%;text-align:center">
  <img style="margin:15px;" src="<?php bloginfo(template_url);?>/img/iconos/circuloRadio.png" alt="">
  <h3 style="font-family:verdana,sans-serif;">Este contenido todavía no esta disponible</h3>
</div>
<?php get_footer();?>

