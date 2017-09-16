<?php
/*
* Template Name: Página de los obispos anteriores
*/
get_header();
include "menu.php";
?>
<img class="imgLupa" src="<?php bloginfo('template_url')?>/img/iconos/lupa.png">
<div class="tituloConBarra">
	<h1>Obispos Anteriores</h1>
	<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
</div>
<?php
	// ObisposAnteriores id 34
	// Emeritos id 29           -Frank
	// ObisposAnteriores id 6
	// Emeritos id 7            -web
	query_posts('cat=6,7');
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorObispos">
					<a href="<?php the_permalink();?>">
						<?php if(has_post_thumbnail()){
		        the_post_thumbnail('thumbnail');
					} else {
						?><img src="<?php bloginfo('template_url');?>/img/avatarGenerico.png"/><?php
					}?>
					</a>
					<a href="<?php the_permalink();?>"><h2 class="tituloPageObispos"><?php the_title() ?></h2></a>
					<p><?php the_excerpt();?></p>
					<a href="<?php the_permalink();?>">+ Info</a>
				</div>
				<?php
			} // end while
		} // end if
?>

<?php get_footer();?>
