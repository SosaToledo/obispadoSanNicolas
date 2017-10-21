<?php get_header(); ?>
<body id="main" onscroll="detect()">
  <!-- <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
  	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
  		<?php dynamic_sidebar( 'home_right_1' ); ?>
  	</div>
  <?php endif; ?> -->
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<!--  -->
<?php
$args = array(
  'posts_per_page' => 4,
  'category_name' => 'noticias',
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
      query_posts('category_name=noticias');
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
      query_posts('category_name=banner');
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
      <a href="<?php bloginfo(url); ?>/en-construccion/">
        <img src="<?php bloginfo('template_url') ?>/img/iconos/historia.png" alt="">
        <p>Historia</p>
      </a>
    </div>
    <div class="diocesisIconos">
      <a href="<?php bloginfo(url); ?>/en-construccion/">
        <img src="<?php bloginfo('template_url') ?>/img/iconos/geoposicion.png" alt="">
        <p>Mapa</p>
      </a>
    </div>
    <div class="diocesisIconos">
      <a href="<?php bloginfo(url); ?>/en-construccion/">
        <img src="<?php bloginfo('template_url') ?>/img/iconos/curia.png" alt="">
        <p>Curia</p>
      </a>
    </div>
    <div class="diocesisIconos">
      <a href="<?php bloginfo(url); ?>/en-construccion/">
        <img src="<?php bloginfo('template_url') ?>/img/iconos/AGENDA.png" alt="">
        <p>Calendario <br> Diocesano</p>
      </a>
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
          <a href="<?php bloginfo(url)?>/obispo-actual#contenedorObispoActual"><img src="<?php bloginfo('template_url') ?>/img/iconos/ESCUDO.png" alt=""></a>
          <p>Escudo</p>
        </div>
        <div id="IC" class="info">
          <a href="<?php bloginfo(url)?>/obispo-actual#contenedorObispoActual"><img src="<?php bloginfo('template_url') ?>/img/iconos/BIOGRAFIA.png" alt=""></a>
          <p>Biografia</p>
        </div>
        <div id="IB" class="info">
          <a href="<?php bloginfo(url)?>/obispo-actual#fotosObispo"><img src="<?php bloginfo('template_url') ?>/img/iconos/FOTOGRAFIAS.png" alt=""></a>
          <p>Fotografia</p>
        </div>
      </div>
      <div class="obispoImg">
        <img src="<?php bloginfo('template_url') ?>/img/obispoActual.jpg" alt="">
        <p></p>
      </div>
      <div class="obispoInfoDer">
        <div id="DA" class="info">
          <a href="<?php bloginfo(url)?>/category/ultimos-escritos"><img src="<?php bloginfo('template_url') ?>/img/iconos/ULTIMOSESCRITOS.png" alt=""></a>
          <p>Ultimos<br>escritos</p>
        </div>
        <div id="DC" class="info">
          <a href="<?php bloginfo(url)?>/obispo-actual#videosObispo"><img src="<?php bloginfo('template_url') ?>/img/iconos/VIDEOS.png" alt=""></a>
          <p>Videos</p>
        </div>
        <div id="DB" class="info">
          <a href="<?php bloginfo(url)?>/category/homilias"><img src="<?php bloginfo('template_url') ?>/img/iconos/HOMILIAS.png" alt=""></a>
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
        <a href="<?php bloginfo(url); ?>/en-construccion/"><img src="<?php bloginfo('template_url') ?>/img/peregrinaciones.jpg" alt="" style="border-radius: 50%;"></a>
        Peregrinaciones
      </div>
      <div class="noticiasDiv">
        <a href="<?php bloginfo(url); ?>/en-construccion/"><img src="<?php bloginfo('template_url') ?>/img/nombramiento.jpg" alt="" style="border-radius: 50%;"></a>
        Nombramientos
      </div>
      <div class="noticiasDiv">
        <a href="<?php bloginfo(url); ?>/en-construccion/"><img src="<?php bloginfo('template_url') ?>/img/retiros.jpg" alt="" style="border-radius: 50%;"></a>
        Retiros
      </div>
    </article>
    <div class="separador" style="width:100%;">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
    </div>
      <h1 class="noticiasDiv">Actualidad</h1>
      <div class="owl-carousel carouselProyectos">
        <?php

          query_posts('category_name=noticias'); // Para excluír se usa el símbolo menos
            $postNoti = 0;
            if ( have_posts() ) {
            	while ( have_posts() ) {
            		the_post();
            		if ($postNoti>6) {
            		  break;
            		}
                $postNoti++;
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
        autoHeight:true,
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
      <p>prensaobispadosn@gmail.com </p>
      <p>Tel. y Fax: (0336) 4422364 / 4429529</p>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13334.551723278633!2d-60.216407!3d-33.32828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd24b7cfb43c9fc66!2sObispado+de+San+Nicolas!5e0!3m2!1ses-419!2sar!4v1505959843793" width="900" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </footer>
</div>

<div class="separador" style="width:100%;">
  <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
</div>

<script type="text/javascript">

// function detect(){
//   var ancho = screen.width;
//   var pantalla = document.getElementById("main").scrollTop;
//   var nav = document.getElementById("barra").style;
//   if ((pantalla>360 && ancho>500) || (ancho < 500)){
//     nav.position = "fixed";
//     nav.top = "0";
//   }else{
//     nav.position = "";
//     nav.top = "";
//   }
//   var elm = document.getElementById("obispoActual").offsetTop;
//   if(elm-500 < pantalla && ancho>500){
//       document.getElementById("IA").className = "info animacionIA";
//       document.getElementById("IC").className = "info animacionIC";
//       document.getElementById("IB").className = "info animacionIB";
//       document.getElementById("DA").className = "info animacionDA";
//       document.getElementById("DC").className = "info animacionDC";
//       document.getElementById("DB").className = "info animacionDB";
//   }
//
// }
</script>
<?php get_footer(); ?>
