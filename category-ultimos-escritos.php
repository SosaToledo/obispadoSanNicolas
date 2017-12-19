
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
	<div class="contenedorUltEscritosCat">
	<h1>Ultimos Escritos</h1>
	<?php
	// ultimos escritos id 41 -Frank
	//id 13 -web
	$paged= ( get_query_var ( 'paged')) ? get_query_var ('paged'):1;
	$args=array('category_name' => 'ultimos-escritos',
				'paged' => $paged);
	query_posts($args);
		if ( have_posts() ) {
			while ( have_posts() ) { ?>
				<div style="width:100%;justify-content:center;margin:10px auto;" class="flexColumn">
					<?php
					the_post();
					echo "<h1>";the_title();echo "</h1>";
					the_excerpt();?>
        	<div>
          	<a style="float:right; margin-right:35px;" class="masInfo" href="<?php the_permalink();?>">+ Info</a>
        	</div>
      	</div>
			<?php } //<!-- end while -->
			echo '<div class="paginacion" style="width:100%" >';    
			echo paginate_links('post_per_page=10');
			echo '</div>';
		} else {
			echo '<h1> No hay escritos que mostrar </h1>';// end if
		}
?></div><?php
get_footer(); ?>
