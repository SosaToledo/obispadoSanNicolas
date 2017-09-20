<?php
/*
* Template Name: Página de los obispos anteriores
*/
get_header();
?>
<header style="background: url('<?php bloginfo("template_url") ?>/img/2obisposanteriores.jpg') no-repeat center; background-size:cover;">
	<p>Obispos Anteriores</p>
</header>
<!--  -->
<?php
include "menu.php";
?>
<img class="imgLupa" src="<?php bloginfo('template_url')?>/img/iconos/lupa.png">
<div class="tituloConBarra">
	<h1>Obispos Anteriores</h1>
	<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
</div>
<?php
	query_posts('category_name=obispos-anteriores,emerito');
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
					<a class="masInfo" href="<?php the_permalink();?>">+ Info</a>
				</div>
				<?php
			} // end while
		} // end if
?>

<?php get_footer();?>
