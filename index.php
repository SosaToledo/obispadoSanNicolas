
<?php get_header(); ?>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p>Obispado de San Nicolas de los Arroyos</p>
  <div class="busquedaBarra">
    <form class="formularioBusqueda" action="index.html" method="post">
      <input type="text" name="busqueda" value="">
      <button type="button" name="Buscar" style="opacity:1 !important;">Buscar</button>
    </form>
  </div>
</header>
<!--  -->
<?php
$args = array(
  // id noticias en el hosting 9
  // noticas en pc Frank 32
  'posts_per_page' => 4,
  'cat' => '9',
  'meta_key' => 'post_views',
  'orderby' => 'meta_value_num',
  'order' => 'DESC'
);
include "menu.php";
?>

<div class="contendorData">
  <div class="tope_slider"></div>

  <div class="owl-carousel carouselPortadas">
    <div class="slides">
        <?php
        $popular_post = new WP_Query($args);
        while ($popular_post->have_posts()): $popular_post->the_post();
        if(has_post_thumbnail()){
          ?><a href="<?php the_permalink();?>">
          <?php  the_post_thumbnail('slidePortada'); ?>
          </a>
          <?php
        }?>
        <a href="<?php the_permalink();?>"><h1 class="tituloSlide"><?php the_title() ?></h1></a>
        <a href="<?php the_permalink();?>"><h1 class="tituloTipoSlide">Lo mas leido</h1></a>
        <?php
        wp_reset_postdata();
        break;
        endwhile;
        ?>
      </div>
    <div class="slides">
      <?php
      // id noticias en el hosting 9
      // noticas en pc Frank 32
      query_posts('cat=9');
      while (have_posts()): the_post();
      if(has_post_thumbnail()){
        ?><a href="<?php the_permalink();?>">
        <?php  the_post_thumbnail('slidePortada'); ?>
        </a>
        <?php
        }?>
        <a href="<?php the_permalink();?>"><h1 class="tituloSlide"><?php the_title() ?></h1></a>
        <a href="<?php the_permalink();?>"><h1 class="tituloTipoSlide">Lo ultimo</h1></a>
        <?php break;
      endwhile;
      ?>
    </div>
    <?php
      // id banner en el hosting 19
      // banner en pc Frank 43
      query_posts('cat=19');
      while (have_posts()): the_post();
      echo '<div class="slide";>';
      if(has_post_thumbnail()){
        the_post_thumbnail('slidePortada');}
        //<h1 class="tituloSlide"><?php the_title(); ?/></h1>
        echo '</div>';
      endwhile;
    ?>

  </div>
  <script>
    $('.carouselPortadas').owlCarousel({
      loop:true,
      items:4,
      margin:10,
      center:true,
      autoplay:true,
      autoplayHoverPause:true,
      autoplayTimeout:3000,
      dots:true,
      responsive:{
        0:{
          items:1,
          autoHeight:true
        },
        1000:{
          items:2
        }
      }
    })
  </script>
  <div class="tituloConBarra">
    <h1>Nuestra Diocesis</h1>
    <img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
  </div>
  <section id="" class="nuestraDiocesis">
    <div class="diocesisIconos">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/historia.png" alt="">
      <p>Historia</p>
    </div>
    <div class="diocesisIconos">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/geoposicion.png" alt="">
      <p>Mapa</p>
    </div>
    <div class="diocesisIconos">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/curia.png" alt="">
      <p>Curia</p>
    </div>
    <div class="diocesisIconos">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/AGENDA.png" alt="">
      <p>Calendario <br> Diocesano</p>
    </div>
  </section>

  <div class="separadorInvertido" style="width:100%;">
    <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
  </div>

  <section id="obispoActual" class="obispoActual">
    <div class="tituloConBarra">
      <h1>Nuestro Obispo</h1>
      <img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
    </div>
    <article id="obispo">
      <div class="obispoInfoIzq">
        <div id="IA" class="info">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/iconos/ESCUDO.png" alt=""></a>
          <p>Escudo</p>
        </div>
        <div id="IC" class="info">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/iconos/BIOGRAFIA.png" alt=""></a>
          <p>Biografia</p>
        </div>
        <div id="IB" class="info">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/iconos/FOTOGRAFIAS.png" alt=""></a>
          <p>Fotografia</p>
        </div>
      </div>
      <div class="obispoImg">
        <img src="<?php bloginfo('template_url') ?>/img/obispoActual.jpg" alt="">
        <p></p>
      </div>
      <div class="obispoInfoDer">
        <div id="DA" class="info">
          <img src="<?php bloginfo('template_url') ?>/img/iconos/ULTIMOSESCRITOS.png" alt="">
          <p>Ultimos<br>escritos</p>
        </div>
        <div id="DC" class="info">
          <img src="<?php bloginfo('template_url') ?>/img/iconos/VIDEOS.png" alt="">
          <p>Videos</p>
        </div>
        <div id="DB" class="info">
          <img src="<?php bloginfo('template_url') ?>/img/iconos/HOMILIAS.png" alt="">
          <p>Homilias</p>
        </div>
      </div>
    </article>
    <aside class="">

    </aside>
  </section>
  <section id="noticias" class="noticias">
    <div class="separadorInvertido" style="width:100%;">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
    </div>
    <article class="noticiasPrincipales">
      <div class="noticiasDiv">
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/peregrinaciones.jpg" alt="" style="border-radius: 50%;"></a>
        Peregrinaciones
      </div>
      <div class="noticiasDiv">
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nombramiento.jpg" alt="" style="border-radius: 50%;"></a>
        Nombramientos
      </div>
      <div class="noticiasDiv">
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/retiros.jpg" alt="" style="border-radius: 50%;"></a>
        Retiros
      </div>
    </article>
    <div class="separador" style="width:100%;">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
    </div>
      <h1 class="noticiasDiv">Actualidad</h1>
      <div class="owl-carousel carouselProyectos">
        <?php
        // id noticias en el hosting 9
        // noticas en pc Frank 32
          query_posts('cat=9'); // Para excluír se usa el símbolo menos

            if ( have_posts() ) {
            	while ( have_posts() ) {
            		the_post();
            		//
            		// Post Content here
                ?>
                <div class="slideProyecto">
                <?php
                if(has_post_thumbnail()){
                  ?><a href="<?php the_permalink();?>">
                  <?php  the_post_thumbnail('slideProyecto'); ?>
                  </a>
                  <?php
                }
                ?><a href="<?php the_permalink();?>"><h1 class="slideProyectoTitulo"><?php the_title() ?></h1></a>
                </div>
                <?php
            		//
            	} // end while
            } // end if
        ?>

      </div>

      <script>
      $('.carouselProyectos').owlCarousel({
        loop:true,
        items:3,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            770:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:true
            }
        }

      })
      </script>
  <footer id="ubicacion">
    <!-- 900 200 -->
    <div class="contenedorFooter">
      <h1>Contacto</h1>
      <p class="detalleFooter">Obispado de San Nicolas de los Arroyos </p>
      <p>Bartolomé Mitre 84 - San Nicolas </p>
      <p>correoelectronico@gmail.com </p>
      <p>Tel. y Fax: (0336) 4422364 / 4429529</p>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.9014726782225!2d-58.48046568523238!3d-34.63193006649742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9911120caab%3A0x4c7c3f255d7eb187!2sObispado+de+San+Nicolas!5e0!3m2!1ses-419!2sar!4v1505546349242" width="900" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </footer>
</div>

<div class="separador" style="width:100%;">
  <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
</div>

<script src="<?php bloginfo('template_url') ?>/js/logica.js"></script>
</body>



<?php get_footer(); ?>
