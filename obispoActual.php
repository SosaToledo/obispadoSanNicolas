<?php
/*
	 * Template Name: Página del obispo actual
	 *
 */
get_header();
?>
<body id="main">
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celu1obispoactual.jpg')!important;
  }
}
</style>
<header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/1obispoactual.jpg') no-repeat center; background-size:cover;">
	<p style="color:rgb(91, 61, 16); font-size:4.5em">Mons. Hugo Norberto Santiago</p>
</header>

<!--  -->
<?php
include "menu.php";
include 'searchbar.php';
?>
	<div class="tituloConBarra" style="margin-top:20px;">
			<h1>Obispo Actual</h1>
			<img class="barraTitulos" src="<?php bloginfo('template_url'); ?>/img/barraObisposAnteriores.png" alt="">
	</div>
	<div id="contenedorObispoActual" class="contenedorObispoActual">
	<?php
		query_posts('category_name=obispo-actual');
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
					} // end while
			} // end if
	?>
	</div>
	<div id="fotosObispo" class="contenedorFotosObispoActual">
		<img src="<?php bloginfo(template_url);?>/img/imgObispo2.jpg" alt="">
		<img src="<?php bloginfo(template_url);?>/img/imgObispo1.jpg" alt="">
		<img src="<?php bloginfo(template_url);?>/img/imgObispo3.jpg" alt="">
	</div>
	<div class="separadorInvertido" style="width:100%;">
    <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
  </div>
	<div class="contenedorEscritosHomilias">
		<div id="UEObispo" class="contendorUltimosEscritos">
			<h1>Ultimos escritos</h1>
			<?php
			// $contador=0;
			$args=array('category_name'=> 'ultimos-escritos',
						'posts_per_page' => 3);
			query_posts($args);
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					?>
					<div class="cajin">
						<a href="<?php the_permalink(); ?>">
						<img src="<?php bloginfo(template_url);?>/img/iconos/pdf-icon.png" alt="">
						</a>
						<div class="otraCaja">
							<?php
								echo "<h1>";
								?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php echo "</h1>";
							?>
						</div>
					</div>
					<?php
				} // end while
			} // end if
			?>
			<div style="text-align: center;">
				<a class="vermas masInfo" href="<?php bloginfo(url);?>/category/ultimos-escritos/">Ver todos</a>
			</div>
		</div>
		<div id="HObispo" class="contenedorHomilias">
			<h1>Homilias</h1>
			<?php
				$args=array('category_name' => 'homilias',
							'posts_per_page' => 3);
				query_posts($args);
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
							<div class="cajin">
								<img src="<?php bloginfo(template_url);?>/img/iconos/mp3-icon.png" alt="">
								<div class="otraCaja">
									<?php
										echo "<h1>";
										the_title();
										echo "</h1>";
										the_content();
									?>
								</div>
							</div>

							<?php } // end while
					} // end if
			?>
			<div style="text-align: center; margin-top:15px;">
				<a class="vermas masInfo" href="<?php bloginfo(url);?>/category/homilias/">Ver todos</a>
			</div>
		</div>
	</div>
	<div class="separador" style="width:100%;">
    <img src="<?php bloginfo('template_url') ?>/img/iconos/DIV3.png" alt="">
  </div>
	<div id="videosObispo" class="contenedorVideos">
		<div class="owl-carousel owl-theme">
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=BAgyLCSk_3k"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=o-MqIua9KYk"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=CdhrWjlR8Wk"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=h4g7SNeOvsc"></a></div>
	    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=k0i1ioAkcO8"></a></div>
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

	<h2 class="pieDeComentario"><i class="fa fa-comments"></i> Dejanos tu comentario </h2>
		
	<div class="fb-comments" data-href="<?php esc_url(the_permalink()); ?>" data-width="100%" data-numposts="10" data-colorscheme="light"></div>

<?php get_footer();?>
<?php  include 'despedida.php';?>
