<?php get_header(); ?>
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
form input, form button{
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

<?php echo do_shortcode('[wpforms id="309" title="false" description="false"]	'); ?>

<!--
//  <form action="<?php bloginfo(url); ?>/wordpress/correo.php" method="post">
//    <input type="text" name="nombre" value="" placeholder="Su nombre y apellido" required>
//    <input type="text" name="correo" value="" placeholder="Dirección de correo para contestar" ><br>
//    <textarea type="text" name="consulta" value="" rows="5" cols="50" placeholder="Diganos su consulta" required></textarea>
//    <button type="submit" value="Enviar"> Enviar</button>
//  </form> -->

<?php
  get_footer();
?>
