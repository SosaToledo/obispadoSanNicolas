<?php
  get_header();
  include "menu.php";
  while ( have_posts() ) : the_post();
  ?>
  <div class="contenedorSingle">

    <h1 class="tituloSingle"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
    <?php
  endwhile; // End of the loop.
?>
