<?php
/*
* Template para las paginas 404, not found
*/
get_header();
?>
<body id="main">
<?php
include "menu.php";
?>

<div id="notfound" style="width:100%;text-align:center">
  <img style="margin:15px;" src="<?php bloginfo(template_url);?>/img/iconos/circuloRadio.png" alt="">
  <h3 style="font-family:verdana,sans-serif;">Lo sentimos, la página solicitada no existe.</h3>
</div>

<?php get_footer(); ?>
<?php  include 'despedida.php';?>

