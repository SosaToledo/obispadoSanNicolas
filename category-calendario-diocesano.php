
<?php get_header();
?>
<body id="main">
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<?php
include "menu.php";
include 'searchbar.php';
	?>
	<div class="contenedorUltEscritosCat">
	<h1>Calendario Diosesano.</h1>
	<?php

	$paged= ( get_query_var ( 'paged')) ? get_query_var ('paged'):1;
	$args=array('category_name' => 'calendario-diocesano',
				'paged' => $paged);
	query_posts($args);
		if ( have_posts() ) {
			while ( have_posts() ) { ?>
				<div style="width:100%;justify-content:center;margin:10px auto;" class="flexColumn">
					<?php
					the_post();
					echo "<h1>";the_title();echo "</h1>";
					the_content();?>
      	</div>
			<?php } //<!-- end while -->
			echo '<div class="paginacion" style="width:100%" >';    
			echo paginate_links('post_per_page=10');
			echo '</div>';
		} else {
			echo '<h1> No hay fechas cargadas. </h1>';// end if
		}
?></div><?php
get_footer(); ?>
<?php  include 'despedida.php';?>
