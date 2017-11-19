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
    <?php the_content();
    if (in_category('ultimos-escritos') ) {
    ?>
      <div class="">
        <a href="?article2pdf=1"><img src="<?php bloginfo(template_url);?>/img/iconos/pdf-icon.png" alt="">PDF version</a>
      </div>
    <?php
    }
    ?>
    </div>
    <?php
  endwhile; // End of the loop.
  // $categorias = wp_get_post_categories(the_ID());
  ?><div class="fb-comments" data-href="
  <?php $host= $_SERVER['HTTP_HOST'];
  $url= $_SERVER['REQUEST_URI'];
  echo 'http://' . $host . $url;
  ?>
  " data-numposts="5" colorscheme="dark"></div>
  <?php get_footer();
?>
