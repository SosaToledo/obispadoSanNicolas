<?php get_header(); ?>
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<?php
/**
* Template Name: Contacto
**/
  include 'menu.php';
?>
 <form class="" action="index.html" method="post">
   <input type="text" name="Nombre" value="">
   <input type="text" name="Correo" value="">
   <input type="text" name="Mensaje" value="">
 </form>
<?php get_footer(); ?>
