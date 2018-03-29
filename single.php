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
      <?php echo do_shortcode('[dkpdf-button]'); ?>
    
    <?php
    }else if (in_category('noticias') ){
    ?>
      <script type="text/javascript">
          /*
          var x = document.getElementById("headersin");
          if (document.body.clientWidth<500){
              x.style.backgroundImage="url(../wp-content/themes/obispadosannicolas/img/celunoticias.jpg)";
            }else{
              x.style.backgroundImage="url(../wp-content/themes/obispadosannicolas/img/noticias.jpg)";
            }
          */
          $(document).ready(function(){
            if ($(document).width()<500){
              $('#headersin').css('background-image','url(<?php bloginfo("template_url"); ?>/img/celunoticias.jpg)');
            }else{
              $('#headersin').css('background-image','url(<?php bloginfo("template_url"); ?>/img/noticias.jpg)');
            }
          });

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
          $(document).ready(function(){
            if ($(document).width()<500){
              $('#headersin').css('background-image','url(<?php bloginfo("template_url"); ?>/img/celu2obisposanteriores.jpg)');
            }else{
              $('#headersin').css('background-image','url(<?php bloginfo("template_url"); ?>/img/2obisposanteriores.jpg)');
            }
          });

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
  
    <h2 class="pieDeComentario"><i class="fa fa-comments"></i> Dejanos tu comentario </h2>
    
  
  <div class="fb-comments" data-href="
  <?php $host= $_SERVER['HTTP_HOST'];
  $url= $_SERVER['REQUEST_URI'];
  echo 'http://' . $host . $url;
  ?>
  " data-numposts="5" colorscheme="dark"></div>

  <?php get_footer();
?>
