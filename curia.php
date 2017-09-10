<?php
/*
 * Template Name: Página curia
 */
get_header();
include "menu.php";
?>
<h1>CURIA</h1>
<?php
	query_posts('cat=23'); // Para excluír se usa el símbolo menos

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();?>
				<div class="contenedorVicario">
					<?php if(has_post_thumbnail()){
		        the_post_thumbnail('imgObispo');
		      }?>
					<h2 style="display:inline-block" class="tituloPageObispos"><?php the_title() ?></h2>
					<button type="button" name="button">+</button>
					<div class="plegable">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
			} // end while
		} // end if
?>

<div class="contenedorParroquias">
	<nav>
		<div class="">
			<button type="button" name="button">Zona I</button>
			<div class="">
				<a href="#">San Nicolas</a>
				<a href="#">Ramallo</a>
			</div>
		</div>
		<div class="">
			<button type="button" name="button">Zona II</button>
			<div class="">
				<a href="#">Pergamino</a>
			</div>
		</div>
	</nav>
	<section class="SeccionParroquias">
		<h1>San Nicolas</h1>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		<button type="button" name="button">+</button>
		<h2>Parroquia x</h2>
		
	</section>
</div>

<script type="text/javascript">
	$(window).ready(function(){
	$('button').click(function(){
		if($(this).next().hasClass('desplegado')){
			 $(this).next().removeClass('desplegado');
		}else{
			 $(this).next().addClass('desplegado');
		}
	})
	})
</script>

<?php get_footer();?>
