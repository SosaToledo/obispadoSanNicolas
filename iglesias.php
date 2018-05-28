<?php
/**
 * Template Name: Pagina de Iglesias
 *
 **/
get_header();?>
<body id="main">
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuportada.jpg')!important;
  }
}
div.accordion{
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
div.accordion2{
    background-color: #6F6F6F;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
.accordion2 p{
  color:#E2E2E2;
}
div.panel {
    padding: 0 18px;
    background-color: grey;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center; background-size:cover;">
  <p style="color:white; font-size:4.5em; font-family:verdana;width:60%;text-decoration:none;border-bottom:8px solid white">Iglesias y Parroquias</p>
</header>
<?php
include "menu.php";
include 'searchbar.php';
?>

<! Este div es para distinguirlos entre el resto del css>

<div class="sacerdotes-ciudades">
  <h2>San Nicolas</h2>
  <?php
  query_posts('category_name=iglesia-sannicolas');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Arrecifes</h2>
  <?php
  query_posts('category_name=iglesia-arrecifes');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    }else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Capitán Sarmiento</h2>
  <?php
  query_posts('category_name=iglesia-capitansarmiento');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    }else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Colón</h2>
  <?php
  query_posts('category_name=iglesia-colon');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>General Arenales</h2>
  <?php
  query_posts('category_name=iglesia-generalarenales');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Pergamino</h2>
  <?php
  query_posts('category_name=iglesia-pergamino');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Ramallo</h2>
  <?php
  query_posts('category_name=iglesia-ramallo');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Rojas</h2>
  <?php
  query_posts('category_name=iglesia-rojas');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>Salto</h2>
  <?php
  query_posts('category_name=iglesia-salto');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    }else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
  <h2>San Pedro</h2>
  <?php
  query_posts('category_name=iglesia-sanpedro');
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="">
          <div class="accordion"><?php the_title(); ?></div>
          <div class="panel ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      } // end while
    } else{
      ?>
      <div class="accordion2">
        <p>No hay datos para mostrar</p>
      </div>
      <?php
    }

  ?>
</div>
<script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
<?php get_footer();?>
<?php  include 'despedida.php';?>
