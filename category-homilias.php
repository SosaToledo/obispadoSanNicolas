
<?php get_header();
?>
<body id="main">
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
	<div class="contenedorHomiliasCat">
	<h1>Homilias</h1>
	<p style="margin-bottom:10px;">Para descargar en Firefox, haga click derecho sobre el audio y luego seleccione "Guardar audio como..." </p>
	<?php
	// obispoActual id 30 -Frank
	//id  -web
	query_posts('cat=30');
		if ( have_posts() ) {
			while ( have_posts() ) {
				?>
				<div style="width:60%;justify-content:center;margin:10px auto;" class="flexRow"><img src="<?php bloginfo(template_url);?>/img/iconos/mp3-icon.png" alt=""><div class="flexColumn">
				<?php
				the_post();
				echo "<p>";the_title();echo "</p>";
				the_content();?>
			</div></div>
			<div class="catSeparador">

			</div>
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
				<?php } // end while
		} else {
			echo '<h1> No hay homilias que mostrar </h1>';// end if
		}
?></div><?php
get_footer(); ?>
