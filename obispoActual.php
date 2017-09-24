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
<header style="background: url('<?php bloginfo("template_url") ?>/img/1obispoactual.jpg') no-repeat center; background-size:cover;">
	<p style="color:rgb(91, 61, 16); font-size:4.5em">Mons. Hugo Norberto Santiago</p>
</header>

<!--  -->
<?php
include "menu.php";
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
			$contador=0;
			query_posts('category_name=ultimos-escritos');
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
				<a class="vermas masInfo" href="<?php bloginfo(url);?>/category/ultimos-escritos/">Ver todos</a>
			</div>
		</div>
		<div id="HObispo" class="contenedorHomilias">
			<h1>Homilias</h1>
			<?php
				query_posts('category_name=homilias	');
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


  <div class="fb-comments" data-href="
  <?php $host= $_SERVER['HTTP_HOST'];
  $url= $_SERVER['REQUEST_URI'];
  echo 'http://' . $host . $url;
  ?>
  " data-numposts="5" colorscheme="dark"></div>
<?php get_footer();?>
