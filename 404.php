<?php
/*
* Template para las paginas 404, not found
*/
get_header();
?>
<body id="main">
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<?php
include "menu.php";
?>

<div id="notfound" style="width:100%;text-align:center">
  <img style="margin:15px;" src="<?php bloginfo(template_url);?>/img/iconos/circuloRadio.png" alt="">
  <h3 style="font-family:verdana,sans-serif;">Lo sentimos, la página solicitada no existe o el contenido al que quieres acceder todavia no fue cargado.</h3>
</div>

<?php get_footer(); ?>
<?php  include 'despedida.php';?>

