
<?php get_header();
?>
<body id="main">
<header style="background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<?php
include "menu.php";
include 'searchbar.php';
	?>
	<div class="contenedorHomiliasCat">
	<h1>Homilias</h1>
	<p style="margin-bottom:10px;">Para descargar en Firefox, haga click derecho sobre el audio y luego seleccione "Guardar audio como..." </p>
	<?php
	// obispoActual id 30 -Frank
	//id  -web
	$paged= ( get_query_var ( 'paged')) ? get_query_var ('paged'):1;
	$args=array('category_name' => 'homilias',
				'paged' => $paged);
	query_posts($args);
		if ( have_posts() ) {
			while ( have_posts() ) {
				?>
				<div style="width:60%;justify-content:center;margin:10px auto;" class="flexRow"><img src="<?php bloginfo(template_url);?>/img/iconos/mp3-icon.png" alt="">
					<div class="flexColumn">
						<?php
						the_post();
						echo "<p>";the_title();echo "</p>";
						the_content();?>
					</div>
				</div>
				<div class="catSeparador"></div>
			<?php } //<!--End While -->
			echo '<div class="paginacion" style="width:100%" >';    
			echo paginate_links('post_per_page=10');
			echo '</div>';
		} else {
			echo '<h1> No hay homilias que mostrar </h1>';// end if
		}?>
	</div>
<?php get_footer(); ?>
<?php  include 'despedida.php';?>
