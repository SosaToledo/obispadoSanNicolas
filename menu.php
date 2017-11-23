<nav id="barra" class="w3-hide-small">
  <p class="iconMenu">&#9776;</p>
  <p id="cerrarMenu">&#x274C;</p>
    <div class="dropdown">
      <a href="<?php bloginfo(url); ?>">Inicio</a>
    </div>
    <div class="dropdown">
      <a href="#">Diocesis</a><span class="iconoSpan" onclick="desplegarSubMenu()">&#187;</span>
      <div class="dropdown-content">
        <a href="<?php bloginfo(url); ?>/historia/">Historia</a>
        <!-- <a href="<?php bloginfo(url); ?>/en-construccion/">Curia</a> -->
        <a href="<?php bloginfo(url); ?>/en-construccion/">Parroquias</a>
        <a href="<?php bloginfo(url); ?>/en-construccion/">Colegio Religiosos</a>
        <!-- <a href="<?php bloginfo(url); ?>/en-construccion/">Vida Consagrada</a> -->
        <!-- <a href="<?php bloginfo(url); ?>/en-construccion/">Pastorales</a> -->
        <a href="<?php bloginfo(url); ?>/crescencia/">Beata Crescencia</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#">Obispo</a><span class="iconoSpan" onclick="desplegarSubMenu()">&#187;
        </span>
      <div class="dropdown-content">
        <a href="<?php bloginfo(url); ?>/obispo-actual/">Actual</a>
        <a href="<?php bloginfo(url); ?>/obispos-anteriores/">Anteriores</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="<?php bloginfo(url); ?>/sacerdotes/">Sacerdotes</a>
    </div>
    <div class="dropdown">
      <a href="<?php bloginfo(url); ?>/catedral/">Catedral</a>
    </div>
    <div class="dropdown">
      <a href="#">Santuario</a><span class="iconoSpan" onclick="desplegarSubMenu()">&#187;</span>
      <div class="dropdown-content">
        <a href="<?php bloginfo(url); ?>/santuario-de-san-nicolas">Maria del Rosario</a>
        <a href="<?php bloginfo(url); ?>/santuario-la-emilia">La Emilia</a>
      </div>
    </div>
    <div class="dropdown">
    <a href="<?php bloginfo(url);?>/noticias">Noticias</a>
    </div>
    <div class="dropdown">
      <a href="<?php bloginfo(url);?>/contacto">Contacto</a>
    </div>
    <div class="dropdown">
      <a href="<?php bloginfo(url)?>/radio"  target="_blank">
        <img style="width:32px; height: 32px; margin:3px 14px 3px 3px;"src="<?php bloginfo('template_url') ?>/img/iconos/radio.png" alt="Radio">
      </a>
    </div>
    <div class="dropdown">
      <a href="https://www.facebook.com/obispadosn/">
        <img style="width:32px; height: 32px; margin:3px;"src="<?php bloginfo('template_url') ?>/img/iconos/facebook.png" alt="Facebook">
      </a>
    </div>
  </nav>


<div class="w3-bar  w3-hide-medium w3-hide-large ">
  <a style="font-size:1.3em" class="toggle w3-bar-item w3-button w3-hide-medium w3-hide-large w3-left" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
    <i class="Toggle fa fa-bars" style="color:#4b4b4b;"></i>
  </a>
  <a class="w3-bar-item titular" href="<?php bloginfo(url); ?>" >Obispado de San Nicolas</a>
  <div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium">

    <!-- Aca van todos los menus con desplegables -->

    <!--  -->
  </div>
</div>
<style media="screen">
  /*.toggle:hover{background-color: #a29f76} */
  .botonMenu{
    background-color:#a29f76;
    padding: 8px 0;
    margin: 0;
    color: #4b4b4b;
    border: none;
    outline: none;
  }
  .w3-bar{
    position: fixed;
    top: 0;
    z-index: 15;
    border-bottom: 2px solid #4b4b4b;
    background-color: #a29f76;
  }
  .w3-bar-item{
    color:#4b4b4b;
  }
  .titular{
    color:#4b4b4b;
    font-family:SCRIPTBL;
    /*text-transform: uppercase;*/
    text-align: center;
    font-size: 1.3em;
  }
</style>

<script type="text/javascript">

  function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
  }
</script>
