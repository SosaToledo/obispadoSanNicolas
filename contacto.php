<?php get_header(); ?>
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
form input, form button, form textarea{
  color: black;
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<?php
/**
* Template Name: Pagina de Contacto
**/
include 'menu.php';
?>
  <form class="" action="<?php bloginfo("template_url") ?>/correo.php" method="post">
  <input name="nombre" type="text" value="" /><br>
  <input name="correo" type="text" value="" /><br>
  <input name="asunto" type="text" value="" /><br>
  <textarea cols="80" name="mensaje" rows="8"></textarea><br>
  <button name="button" type="submit">Enviar</button>
<!-- <input type="button" name="boton" value="Enviar"> --></form>
<?php
  get_footer();
?>
