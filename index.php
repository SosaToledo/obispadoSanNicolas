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
        if(has_post_thumbnail()){the_post_thumbnail('slidePortada'); }?>
        <h1 class="tituloSlide"><?php the_title();?></h1><?php break;
      endwhile;
      ?>
    </div>
    <div class="slides">
      <img src="http://lorempixel.com/1920/450" class="thumb" >
      <h1 class="tituloSlide">Proximamente, mas contenido</h1>
    </div><div class="slides">
      <?php
      while (have_posts()): the_post();
      if(has_post_thumbnail()){the_post_thumbnail('slidePortada'); }?>
      <!-- <h1 class="tituloSlide"><?php the_title();?></h1> -->
      <?php break;
    endwhile;
    ?>
  </div><div class="slides">
    <img src="http://lorempixel.com/1920/450" class="thumb" >
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
        <img src="<?php bloginfo('template_url') ?>/img/igleNoticias.jpg" alt="" style="border-radius: 50%;">
        Peregrinaciones
      </div>
      <div class="noticiasDiv">
        <img src="<?php bloginfo('template_url') ?>/img/igleNoticias.jpg" alt="" style="border-radius: 50%;">
        Nombramientos
      </div>
      <div class="noticiasDiv">
        <img src="<?php bloginfo('template_url') ?>/img/igleNoticias.jpg" alt="" style="border-radius: 50%;">
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
        <img src="<?php bloginfo('template_url') ?>/img/audioIcono.jpg" alt="">
        Audios
      </div>
      <div class="noticiasDiv">
        <img src="<?php bloginfo('template_url') ?>/img/videoIcono.jpg" alt="">
        Videos
      </div>
    </article>
    <article class="noticiasSlider">
      Proyectos
    </article>
  <footer id="ubicacion">
    <h1>Obispado de San Nicolas de los Arroyos</h1>
    <p>Bartolomé Mitre 84 <br>
    San Nicolas, Buenos Aires <br>
    Tel y fax: (0336) 4422364 / 4429529</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26667.7039472087!2d-60.23595152441922!3d-33.332852032696024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62183e69c44221af!2sIglesia+Adventista+San+Nicol%C3%A1s+Centro!5e0!3m2!1ses-419!2sar!4v1501950679251" width="900" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </footer>
</div>

<div class="separador" style="width:100%;">
  <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
</div>

<script src="<?php bloginfo('template_url') ?>/js/logica.js"></script>
</body>



<?php get_footer(); ?>
