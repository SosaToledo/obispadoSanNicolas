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
  </div>
    <?php
  endwhile; // End of the loop.
  get_footer();
?>
