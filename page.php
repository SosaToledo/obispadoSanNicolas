<?php
/**
 * The template for displaying all pages
 *
 *
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */
get_header();?>
<audio controls="" preload="none" src="http://stream.codigosur.org:8000/kasandrxs.mp3"></audio>
<?php
	query_posts('cat=5'); // Para excluír se usa el símbolo menos

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorObispos">
					<h2 class="tituloPageObispos"><?php the_title() ?></h2>
					<div class="plegable">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
			} // end while
		} // end if
?>

<script type="text/javascript">
	$(window).ready(function(){
	$('h2').click(function(){
		if($(this).next().hasClass('desplegado')){
			 $(this).next().removeClass('desplegado');
		}else{
			 $(this).next().addClass('desplegado');
		}
	})
	})
</script>

<?php get_footer();?>
<?php  include 'despedida.php';?>
