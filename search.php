<?php
/**
 * la template para disponer los resultados
 */
get_header();?>
<body id="main">
<style media="screen">
  @media screen and (max-width:500px) {
    header{
      background-image: url('<?php bloginfo("template_url") ?>/img/celunoticias.jpg')!important;
    }
  }
    .pagination{
      background-color: inherit;
      margin: 20px 0;
    }
    .screen-reader-text{
      display: none;
    }
    .nav-links{
      width: 80%;
      text-align: center;
    }
    .nav-links a, .current{
      background-color: grey;
      padding:10px;
      margin: 5px;
      display: inline-block;
      font-size: 1.5em;
      color: white;
      font-family: verdana,sans-serif;
    }
    .nav-links a:hover{
      background-color: rgb(103, 103, 103);
    }
    .current{
      background-color: #a29f76
    }
</style>
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/noticias.jpg') no-repeat center; background-size:cover;">
	<p style="color:white; font-size:4.5em; font-family:verdana,sans-serif;width:60%;text-decoration:none;border-bottom:8px solid white">Busqueda</p>
</header>
<?php
include "menu.php";


echo '<div class="resultados">';
?>

<h2 style="font-family:verdana,sans-serif;text-align:center;">Resultado de la busqueda:</h2>

  <form role="search" method="get" class="search-form" style="width:100%;margin:10px;height:30px;" action="<?php echo home_url( '/' ); ?>">
  	<input type="search" class="search-field w3-input w3-third" style="margin-right:5px;color:black;width:88%;margin:none;outline:none" placeholder="<?php echo esc_attr_x( 'Ingrese termino, nombre, iglesia, etc...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" autocomplete="off" minlength=4 maxlength="45"  required/>
  	<input type="submit" class="search-submit w3-bar-item w3-button" style="width:10%;background-color:#A29f76" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"/>
  </form>
<?php

  if (have_posts()){
    while (have_posts()) {
      the_post();

			?><div class="resultadoBox">
        <?php $categoria = get_the_category()[0]->slug; ?>

        <?php if ($categoria == 'noticias' || $categoria == 'historia' || $categoria == 'obispo-actual' || $categoria == 'obispos-anteriores' || $categoria == '' || $categoria == 'emerito' || $categoria == 'ultimos-escritos'  ):?>
          <a href="<?php the_permalink();?>"><h2 class="tituloRe"><?php relevanssi_the_title() ?></h2></a>
          <?php
          the_excerpt(); ?>
          <div style="width:100%;">
            <a href="<?php the_permalink();?>"><h4 class="linkBusqueda"> + Info </h4></a>
          </div>
        <?php else: ?>
          <h2 class="tituloRe"><?php relevanssi_the_title() ?></h2>
          <?php the_content(); ?>
        <?php endif; ?>
      </div>
			<?php
    }// end while

    echo '<div class="paginacion" style="width:100%" >';    
    echo paginate_links('post_per_page=10');
    echo '</div>';
    
	}else {
		?><h1>No se encontraron resultados :(</h1><?php
	}
  echo '</div>';
?>


<?php get_footer();?>
<?php  include 'despedida.php';?>
