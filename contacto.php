<?php get_header(); ?>
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background: url('<?php bloginfo("template_url") ?>/img/contactos.jpg')!important;
  }
}
form input, form button, form textarea{
  color: black;
}
.botoncito{
  margin:auto;
  display:block;
  width:260px;
}
.titulo{
  width:100%;
  text-align:center;
  font-family:verdana,sans-serif;
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/contactos.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>

<?php
/**
* Template Name: Pagina de Contacto
**/
include 'menu.php';
include 'searchbar.php';
?>
  <h2 class="titulo">Envianos tu correo.</h2>
  <div style="width:90%;margin:auto;margin-bottom:15px;" >
    <form class="conteiner" action="<?php bloginfo("template_url") ?>/correo.php" method="post">
      <label for="">
        <input placeholder="Nombre" class="w3-input" name="nombre" type="text" value="" required minlength="4" maxlength="30"/><br>
      </label>
      <label for="">
        <input placeholder="Correo" class="w3-input" id="correo" name="correo" type="email" value="" required minlength="4" maxlength="30"/><br>
      </label>
      <label for="">
        <input placeholder="Asunto del correo" class="w3-input" name="asunto" type="text" value="" required minlength="4" maxlength="30"/><br>
      </label>
      <label for="">
        <textarea placeholder="Dejanos tu mensaje, lo contestaremos a la brevedad posible" class="w3-input" cols="80" name="mensaje" rows="8" required></textarea><br>
      </label>
      <input class="w3-button botoncito" id="submit" type="submit" name="Enviar" value="Enviar correo" style="background-color:#a29f76" />
    </form>
  </div>
<?php
  get_footer();
?>
