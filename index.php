<?php get_header(); ?>
<script>
    $(function(){
      $("#slideshow").slidesjs({
        height: 450,
        navigation: false
      });
    });
</script>

<!--  -->
<?php
$args = array(
  'posts_per_page' => 4,
  'meta_key' => 'post_views',
  'orderby' => 'meta_value_num',
  'order' => 'DESC'
);
?>

<div class="contendorData">
  <div class="tope_slider"></div>
  <div class="no-slide">
    <section id="slideshow" >
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
        <?php break;
      endwhile;
      ?>
    </div>
    <div class="slides">
      <img src="http://obispadodesannicolas.com/wp-content/uploads/2017/08/cross_450.jpg" class="thumb" >
      <h1 class="tituloSlide">Proximamente, mas contenido</h1>
    </div>
    <div class="slides">
      <?php
      while (have_posts()): the_post();
      if(has_post_thumbnail()){
        ?><a href="<?php the_permalink();?>">
        <?php  the_post_thumbnail('slidePortada'); ?>
        </a>
        <?php
      }?>
      <a href="<?php the_permalink();?>"><h1 class="tituloSlide"><?php the_title() ?></h1></a>
      <?php break;
    endwhile;
    ?>
  </div><div class="slides">
    <img src="http://obispadodesannicolas.com/wp-content/uploads/2017/08/St-Giles-Church-007-e1475334065286-1920x450.jpg" class="thumb" >
    <h1 class="tituloSlide">Pagina en desarrollo</h1>
  </div>
</section>
</div>

  <section id="" class="nuestraDiocesis">

    <div class="diocesisIconos">
      <img src="<?php bloginfo('template_url') ?>/img/iconos/geoposicion.png" alt="">
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
    <article id="obispo">
      <div class="obispoInfoIzq">
        <div class="info">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/iconos/ESCUDO.png" alt=""></a>
          <p>Escudo</p>
        </div>
        <div class="info">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/iconos/BIOGRAFIA.png" alt=""></a>
          <p>Biografia</p>
        </div>
        <div class="info">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/iconos/FOTOGRAFIAS.png" alt=""></a>
          <p>Fotografia</p>
        </div>
      </div>
      <div class="obispoImg">
        <img src="<?php bloginfo('template_url') ?>/img/obispoActual.jpg" alt="">
        <p></p>
      </div>
      <div class="obispoInfoDer">
        <div class="info">
          <img src="<?php bloginfo('template_url') ?>/img/iconos/ULTIMOSESCRITOS.png" alt="">
          <p>Ultimos escritos</p>
        </div>
        <div class="info">
          <img src="<?php bloginfo('template_url') ?>/img/iconos/VIDEOS.png" alt="">
          <p>Videos</p>
        </div>
        <div class="info">
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
    <article class="noticiasMultimedia">
      <div class="noticiasDiv">
        <a href="#">
          <img src="<?php bloginfo('template_url') ?>/img/camaraIcono.jpg" alt="">
        </a>
        Fotos
      </div>
      <div class="noticiasDiv">
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/audioIcono.jpg" alt=""></a>
        Audios
      </div>
      <div class="noticiasDiv">
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/videoIcono.jpg" alt=""></a>
        Videos
      </div>
    </article>
      <h1 class="noticiasDiv">Proyectos</h1>
      <div class="owl-carousel">
        <?php
          query_posts('cat=23'); // Para excluír se usa el símbolo menos

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
      $('.owl-carousel').owlCarousel({
        loop:true,
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26667.7039472087!2d-60.23595152441922!3d-33.332852032696024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62183e69c44221af!2sIglesia+Adventista+San+Nicol%C3%A1s+Centro!5e0!3m2!1ses-419!2sar!4v1501950679251" width="900" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </footer>
</div>

<div class="separador" style="width:100%;">
  <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
</div>

<script src="<?php bloginfo('template_url') ?>/js/logica.js"></script>
</body>



<?php get_footer(); ?>
