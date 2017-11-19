	<?php
/*
	 * Template Name: Página de la radio
	 *
 */
get_header();
?>
<body id="main">
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celuradiost.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/radiost.jpg') no-repeat center; background-size:cover;">
	<p style="font-family:verdana;">Radio del Obispado</p>
</header>
<?php include "menu.php";?>


<div class="radio">
	<div style="border: 3px solid #818181;background-color:#4d4d4d;border-radius:50px;" >
		<img style="margin:auto;display:block;" src="<?php bloginfo(template_url);?>/img/iconos/circuloRadio.png" alt="">
	</div>
	<div class="">
		<audio style="position:absolute" preload="auto" id="reproductor">
			<source src="http://50.22.219.37:30067/stream" type="audio/mpeg">
			<p>Tu navegador no soporta la radio online</p>
		</audio>
		<div style="display:flex; align-items:center;width:90%;margin:20px auto;">
			<button style="display:inline-block" id="playRadio" onclick="repRadio()"><img id="play" src="<?php bloginfo(template_url);?>/img/iconos/play.png" alt=""></button>
			<button style="display:inline-block" id="muteRadio" onclick="mutear()"><img id="muteButton" src="<?php bloginfo(template_url);?>/img/iconos/sinsonido.png" alt=""></button>
			<div style="display:inline-block; width:100%;height:30px;line-height:30px;border:2px solid #858585;border-radius:15px;padding:10px;" class="volumen">
				<input id="volumenRadio" oninput="volum()" type="range" name="" value="80">
			</div>
		</div>
	</div>
	<img id="dialRadio" style="width:100%;" src="<?php bloginfo(template_url);?>/img/iconos/dialRadio.png" alt="">


</div>

<script type="text/javascript">
	var rep = document.getElementById('reproductor');
	var volumen = document.getElementById('volumenRadio');

	function repRadio(){
		var p = document.getElementById('play');
		if (p){
			rep.play();
			p.id = "stop";
			p.src = "<?php bloginfo(template_url);?>/img/iconos/stop.png";
		} else {
			rep.pause();
			document.getElementById('stop').src = "<?php bloginfo(template_url);?>/img/iconos/play.png";
			document.getElementById('stop').id = "play";
		}
	}
	function mutear() {
		var mu = rep.muted;
		var botonaso = document.getElementById('muteButton');
		if (mu){
			rep.muted=false;
			botonaso.src="<?php bloginfo(template_url);?>/img/iconos/sinsonido.png";
		}else{
			botonaso.src="<?php bloginfo(template_url);?>/img/iconos/sonido.png";
			rep.muted=true;
		}
	}
	function volum() {
		var vol = volumen.value/100;
		document.getElementById('reproductor').volume = vol;
	}
</script>


<div class="fb-comments" data-href="
<?php $host= $_SERVER['HTTP_HOST'];
$url= $_SERVER['REQUEST_URI'];
echo 'http://' . $host . $url;
?>
" data-numposts="5" colorscheme="dark"></div>


<?php get_footer();?>
