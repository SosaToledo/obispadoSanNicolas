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
include 'searchbar.php';
?>
  <form class="formularioContacto" action="<?php bloginfo("template_url") ?>/correo.php" method="post">
  <input class="formu" name="nombre" type="text" value="" placeholder="Nombre" required/><br>
  <input class="formu" name="correo" type="email" value="" placeholder="Correo Electronico" required/><br>
  <input class="formu" name="asunto" type="text" value="" placeholder="Asunto" required/><br>
  <textarea class="cuerpo" cols="60" name="mensaje" rows="6" placeholder="Ingrese su mensaje aqui" required></textarea><br>
  <button class="botonEnviarCorreo w3-hover-gray" name="button" type="submit">Enviar Correo</button>
<!-- <input type="button" name="boton" value="Enviar"> --></form>
<?php
  get_footer();
?>
