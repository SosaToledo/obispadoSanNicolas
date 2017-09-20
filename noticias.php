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
	query_posts('category_name=noticias'); // Para excluír se usa el símbolo menos
		$con=0;
		?><div class="noticiasCompleto"><?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorNoticias">
					<?php if ($con == 0){?>
						<h2 class="tituloNoticias"><?php the_title() ?></h2><?php
						if(has_post_thumbnail()){the_post_thumbnail('slidePortada');}
					}else {
						if(has_post_thumbnail()){the_post_thumbnail('thumbnail');}
						?><h2 class="tituloNoticias"><?php the_title() ?></h2><?php
					};
					$con++;
					?>
					<p><?php the_excerpt(); ?></p>
					<a class="masInfo" href="<?php the_permalink(); ?>">Ver +</a>
					</div>
					<?php
			}?>
			<?php
		}else {
			?><p>No hay datos que mostrar...</p><?php
		}
		?></div><?php


?>

<?php get_footer();?>
