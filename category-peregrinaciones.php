
<?php get_header();
?>
<body id="main">
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/portada.jpg') no-repeat center center; background-size:cover;">
  <p style="color:black;">Obispado de San Nicolas de los Arroyos</p>
</header>
<?php

include "menu.php";
include 'searchbar.php';
	$ourCurrentPage = get_query_var('paged');
	$aboutPost = new WP_Query(array(
		'category_name' => 'peregrinaciones',
		'post_per_page' => 7,
		'paged' => $ourCurrentPage
	));
	$con=0;
	?><div class="noticiasCompleto"><?php
	if ( $aboutPost -> have_posts() ) {
		while ( $aboutPost -> have_posts() ) {
			$aboutPost->the_post();?>
				<?php if ($con == 0 && $ourCurrentPage==0){?>
					<div class="contenedorNoticias">
					<a href="<?php the_permalink();?>"><h2 class="tituloNoticias"><?php the_title() ?></h2></a>
					<a class="imgNoticia1" href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){the_post_thumbnail('slidePortada');} ?></a><?php
				}else {
					?><div class="contenedorNoticias2">
					<a class="imgNoticia2" href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){the_post_thumbnail('medium');} ?></a>
					<a href="<?php the_permalink();?>"><h2 class="tituloNoticias"><?php the_title() ?></h2></a><?php
				};
				$con++;
				?><div class="parteDerechaNoticias">
						<p><?php the_excerpt(); ?></p>
						<a class="masInfo" href="<?php the_permalink(); ?>">Ver +</a>
					</div>
				</div>
				<?php
		} //end while
		echo '<div class=paginacion >';
		echo paginate_links(array(
			'total' => $aboutPost -> max_num_pages
		));
		echo '</div>';
	}else {
		?><p> No hay datos que mostrar...</p><?php
	} //end if/else
	?>
	</div><?php


?>
<?php get_footer(); ?>
<?php  include 'despedida.php';?>
