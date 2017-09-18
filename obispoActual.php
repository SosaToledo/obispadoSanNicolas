<?php
/*
	 * Template Name: Página del obispo actual
	 *
 */
get_header();
?>
<header style="background: url('<?php bloginfo("template_url") ?>/img/1obispoactual.jpg') no-repeat center; background-size:cover;">
</header>
<!--  -->
<?php
include "menu.php";
?>
</header>
	<img class="imgLupa" src="<?php bloginfo('template_url')?>/img/iconos/lupa.png">
	<div class="tituloConBarra" style="margin-top:20px;">
			<h1>Obispo Actual</h1>
			<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
			<h1>Mons. Hugo Norberto Santiago</h1>
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
		<img src="http://lorempixel.com/288/512/" alt="">
		<img src="http://lorempixel.com/288/512/" alt="">
		<img src="http://lorempixel.com/288/512/" alt="">
	</div>
	<div class="contenedorEscritosHomilias">
		<div class="contendorUltimosEscritos">
			<h1>Ultimos escritos</h1>
			<?php
			// obispoActual id 41 -Frank
			//id  -web
			$contador=0;
			query_posts('cat=41');
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					echo '<div><img src="';
					bloginfo('template_url');
					echo '/img/iconos/pdf-icon.png"';
					echo "</img>";
					?>
					<a href="<?php the_permalink();?> ">
						<?php the_title(); ?>
					</a></div>
					<?php
					$contador++;
					if($contador==3){break;}
				} // end while
			} // end if
			?>
			<a class="vermas" href="http://localhost/wordpress/category/ultimos-escritos/">Ver todos</a>
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
							<div>
								<img src="<?php bloginfo(template_url);?>/img/iconos/mp3-icon.png" alt=""><div class="homilias">
							<p><?php
							the_title();?></p><?php
							the_content();
							?></div></div><?php
							} // end while
					} // end if
			?>
			<a class="vermas" href="http://localhost/wordpress/category/homilias/">Ver todos</a>
		</div>
	</div>

	<div class="contenedorVideos">
		<div class="owl-carousel owl-theme">
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=JBAJhrgu6b8&list=RDJBAJhrgu6b8"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=RM7lw0Ovzq0&list=RDMMRM7lw0Ovzq0"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=zqKZ_WIK5ms&index=4&list=RDMMRM7lw0Ovzq0"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=xiT3vZj5WTM&list=RDGMEMYH9CUrFO7CfLJpaD7UR85wVMxiT3vZj5WTM"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=uPy5igZJnVw&index=5&list=RDGMEMYH9CUrFO7CfLJpaD7UR85wVMxiT3vZj5WTM"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=FRUg3RcELYo&index=5&list=RDJBAJhrgu6b8"></a></div>
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
