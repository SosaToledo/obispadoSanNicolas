<?php
  get_header();
  ?>
  <body>

  <header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
    <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
  </header><?php
  include "menu.php";
  while ( have_posts() ) : the_post();
  ?>
  <div class="contenedorSingle">

    <h1 class="tituloSingle"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <div class="descargaPDF">
    <a style="display:inline-block" href="?article2pdf=1"><img src="<?php bloginfo(template_url);?>/img/iconos/pdf-icon.png" alt="">PDF version</a>
  </div>
  </div>
    <?php
  endwhile; // End of the loop.
  ?><div class="fb-comments" data-href="
  <?php $host= $_SERVER['HTTP_HOST'];
  $url= $_SERVER['REQUEST_URI'];
  echo 'http://' . $host . $url;
  ?>
  " data-numposts="5" colorscheme="dark"></div>
  <?php get_footer();
?>
