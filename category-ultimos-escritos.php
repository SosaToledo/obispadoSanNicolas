
<?php get_header();
?>
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
  <div class="busquedaBarra">
    <form class="formularioBusqueda" action="index.html" method="post">
      <input type="text" name="busqueda" value="">
      <button type="button" name="Buscar" style="opacity:1 !important;">Buscar</button>
    </form>
  </div>
</header>
<?php
include "menu.php";
	?>
	<div class="contenedorUltEscritosCat">
	<h1>Ultimos Escritos</h1>
	<?php
	// ultimos escritos id 41 -Frank
	//id 13 -web
	query_posts('cat=13');
		if ( have_posts() ) {
			while ( have_posts() ) {
				?>
				<div style="width:90%;justify-content:center;margin:10px auto;" class="flexColumn">
				<?php
				the_post();
				echo "<h1>";the_title();echo "</h1>";
				the_excerpt();?>
        <div>
          <a style="float:right; margin-right:35px;" class="masInfo" href="<?php the_permalink();?>">+ Info</a>
        </div>
      </div>
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
				<?php } // end while
		} else {
			echo '<h1> No hay homilias que mostrar </h1>';// end if
		}
?></div><?php
get_footer(); ?>
