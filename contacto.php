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
  <div >
    <form class="conteiner" action="<?php bloginfo("template_url") ?>/correo.php" method="post">
      <label for="">
        <p>Nombre</p>
        <input name="nombre" type="text" value="" required minlength="4" maxlength="30"/><br>
      </label>
      <label for="">
        <p>Correo</p>
        <input id="correo" name="correo" type="email" value="" required minlength="4" maxlength="30"/><br>
      </label>
      <label for="">
        <p>Asunto</p>
        <input name="asunto" type="text" value="" required minlength="4" maxlength="30"/><br>
      </label>
      <label for="">
        <p>Mensaje</p>
        <textarea cols="80" name="mensaje" rows="8" required></textarea><br>
      </label>
      <input id="submit" type="submit" name="Enviar" />
    </form>
  </div>
<?php
  get_footer();
?>
