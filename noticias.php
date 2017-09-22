<?php
/**
 * Template Name: Pagina de Noticias
 **/
get_header();?>
<header style="background: url('<?php bloginfo("template_url") ?>/img/noticias.jpg') no-repeat center; background-size:cover;">
	<p style="color:white; font-size:4.5em; font-family:verdana;width:60%;text-decoration:none;border-bottom:8px solid white">Noticias</p>
</header>
<?php
include "menu.php";
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	// $query = new WP_Query( array( 'paged' => $paged,'category_name'=> 'noticias','post_per_page'=>2 ) );
	query_posts('category_name=noticias&post_per_page=2'); // Para excluír se usa el símbolo menos
		$con=0;
		?><div class="noticiasCompleto"><?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorNoticias">
					<?php if ($con == 0){?>
						<a href="<?php the_permalink();?>"><h2 class="tituloNoticias"><?php the_title() ?></h2></a>
						<a class="imgNoticia1" href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){the_post_thumbnail('slidePortada');} ?></a><?php
					}else {
						?><a class="imgNoticia2" href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){the_post_thumbnail('medium');} ?></a>
						<a href="<?php the_permalink();?>"><h2 class="tituloNoticias"><?php the_title() ?></h2></a><?php
					};
					$con++;
					?><div class="parteDerechaNoticias">
							<p><?php the_excerpt(); ?></p>
							<a class="masInfo" href="<?php the_permalink(); ?>">Ver +</a>
						</div>
					</div>

					<?php
			}
		}else {
			?><p>No hay datos que mostrar...</p><?php
		}?>

		</div><?php


?>

<?php get_footer();?>
