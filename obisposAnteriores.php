<?php
/*
* Template Name: Página de los obispos anteriores
*/
get_header();
include "menu.php";
?>
<img class="imgLupa" src="<?php bloginfo('template_url')?>/img/iconos/lupa.png">
<h1 style="width:75%; margin:auto;">Obispos Anteriores</h1>
<?php
	query_posts('cat=23'); // Para excluír se usa el símbolo menos
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorObispos">
					<?php if(has_post_thumbnail()){
		        the_post_thumbnail('imgObispo');
		      }?>
					<h2 class="tituloPageObispos"><?php the_title() ?></h2>
					<p><?php the_excerpt();?></p>
					<a href="<?php the_permalink();?>">+ Info</a>
				</div>
				<?php
			} // end while
		} // end if
?>

<?php get_footer();?>
