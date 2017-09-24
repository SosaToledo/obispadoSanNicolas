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
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center; background-size:cover;">
	<p style="color:black">Obispado de San Nicolas</p>
</header>

<!--  -->
<?php
include "menu.php";
?>
<h1 style="text-align:center; margin-top:100px;font-size:4.5em;font-family:SCRIPTBL;text-decoration:underline;">Sección en construccion</h1>
<?php get_footer();?>
