<?php
  get_header();
  while ( have_posts() ) : the_post();
  ?>
  <div class="contenedorSingle">
    <?php
    if(has_post_thumbnail()){
      the_post_thumbnail('slidePortada');
    }?>
    <h1 class="tituloSingle"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
    <?php
  endwhile; // End of the loop.
?>
