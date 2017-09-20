<?php
/*
	 * Template Name: Página del obispo actual
	 *
 */
get_header();
?>
<header style="background: url('<?php bloginfo("template_url") ?>/img/1obispoactual.jpg') no-repeat center; background-size:cover;">
	<p style="color:rgb(91, 61, 16); font-size:4.5em">Mons. Hugo Norberto Santiago</p>
</header>
<!--  -->
<?php
include "menu.php";
?>
	<img class="imgLupa" src="<?php bloginfo('template_url')?>/img/iconos/lupa.png">
	<div class="tituloConBarra" style="margin-top:20px;">
			<h1>Obispo Actual</h1>
			<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
	</div>
	<div class="contenedorObispoActual">
	<?php
		// obispoActual id 33 -Frank
		//id 8 -web
		query_posts('cat=33');
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
					} // end while
			} // end if
	?>
	</div>
	<div class="contenedorFotosObispoActual">
		<img src="<?php bloginfo(template_url);?>/img/imgObispo2.jpg" alt="">
		<img src="<?php bloginfo(template_url);?>/img/imgObispo1.jpg" alt="">
		<img src="<?php bloginfo(template_url);?>/img/imgObispo3.jpg" alt="">
	</div>
	<div class="separadorInvertido" style="width:100%;">
    <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
  </div>
	<div class="contenedorEscritosHomilias">
		<div class="contendorUltimosEscritos">
			<h1>Ultimos escritos</h1>
			<?php
			// ultimosEscritos id 41 -Frank
			//id  -web
			$contador=0;
			query_posts('cat=41');
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					echo '<div class="flexRow"><img src="';
					bloginfo('template_url');
					echo '/img/iconos/pdf-icon.png"';
					echo "</img>";
					?>
					<div class="flexColumn">
						<h1>
							<a href="<?php the_permalink();?> ">
								<?php the_title(); ?>
							</a>
						</h1>
					</div>
				</div>
					<?php
					$contador++;
					if($contador==3){break;}
				} // end while
			} // end if
			?>
			<div style="text-align: center;">
				<a class="vermas masInfo" href="http://localhost/wordpress/category/ultimos-escritos/">Ver todos</a>
			</div>
		</div>
		<div class="contenedorHomilias">
			<h1>Homilias</h1>
			<?php
				// obispoActual id 30 -Frank
				//id  -web
				query_posts('cat=30');
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
							<div class="flexRow">
								<img src="<?php bloginfo(template_url);?>/img/iconos/mp3-icon.png" alt=""><div class="flexColumn">
							<h1><?php
							the_title();?></h1><?php
							the_content();
							?></div></div><?php
							} // end while
					} // end if
			?>
			<div style="text-align: center;">
				<a class="vermas masInfo" href="http://localhost/wordpress/category/homilias/">Ver todos</a>
			</div>
		</div>
	</div>
	<div class="separador" style="width:100%;">
    <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
  </div>
	<div class="contenedorVideos">
		<div class="owl-carousel owl-theme">
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=6lqtE8oH7u8"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=3uAipwc3w98"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=4txDzplzk3k"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=CdhrWjlR8Wk"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=h4g7SNeOvsc"></a></div>
		</div>
		<style media="screen">
			.item-video{
				height: 500px;
			}
		</style>
		<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			items:1,
			merge:true,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			video:true,
			lazyLoad:true,
			center:true,
			responsive:{
					480:{
							items:2
					},
					600:{
							items:4
					}
			}
		})
		</script>
	</div>
<?php get_footer();?>
