<?php
  get_header();
  ?>
  <body>

  <header id="headersin" style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
    <p id="portadin" style="color:black;">Obispado de San Nicolas de los Arroyos</p>
  </header>
  <?php
  include "menu.php";
  include 'searchbar.php';

  while ( have_posts() ) : the_post();
  ?>
  <script type="text/javascript">
    document.getElementById("titlesin").innerHTML="<?php the_title() ?>";
  </script>

  <div class="contenedorSingle">

    <h1 class="tituloSingle"><?php the_title(); ?></h1>
    <?php the_content();
    if (in_category('ultimos-escritos') ) {
    ?>
      <div class="descargarPDF">
        <a href="?article2pdf=1"><img src="<?php bloginfo(template_url);?>/img/iconos/pdf-icon.png" alt="">PDF version</a>
      </div>
    <?php
    }else if (in_category('noticias') ){
    ?>
      <script type="text/javascript">

          var x = document.getElementById("headersin");
          if (document.body.clientWidth<500){
              x.style.backgroundImage="url(../wp-content/themes/obispadosannicolas/img/celunoticias.jpg)";
            }else{
              x.style.backgroundImage="url(../wp-content/themes/obispadosannicolas/img/noticias.jpg)";
            }
          
          var y = document.getElementById("portadin");
          y.innerHTML="Noticias";
          y.style.fontFamily="verdana,sans-serif";
          y.style.color="#fff";
          y.style.textDecoration="none";
          y.style.borderBottom= "8px solid #fff";
          y.style.width="60%";

      </script>
    <?php
    }else if (in_category('obispos-anteriores') || in_category('emerito')){
      ?>
        <script type="text/javascript">

            var x = document.getElementById("headersin");
            if (document.body.clientWidth<500){
              x.style.backgroundImage="url(../wp-content/themes/obispadosannicolas/img/celu2obisposAnteriores.jpg)";
            }else{
              x.style.backgroundImage="url(../wp-content/themes/obispadosannicolas/img/2obisposAnteriores.jpg)";
            }
            
            var y = document.getElementById("portadin");
            y.innerHTML="Obispos Anteriores";
            y.style.color="#fff";

        </script>
      <?php
      } 
    ?>
    </div>
    <?php
  endwhile; // End of the loop.
  ?>
  <h2 class="pieDeComentario">Dejanos tu comentario</h2>
  <div class="fb-comments" data-href="
  <?php $host= $_SERVER['HTTP_HOST'];
  $url= $_SERVER['REQUEST_URI'];
  echo 'http://' . $host . $url;
  ?>
  " data-numposts="5" colorscheme="dark"></div>

  <?php get_footer();
?>
