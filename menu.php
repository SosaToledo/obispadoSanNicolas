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
        <a href="<?php bloginfo(url); ?>/curia/">Curia</a>
        <a href="<?php bloginfo(url); ?>/en-construccion/">Parroquias</a>
        <a href="<?php bloginfo(url); ?>/en-construccion/">Colegios Religiosos</a>
        <a href="<?php bloginfo(url); ?>/en-construccion/">Vida Consagrada</a>
        <a href="<?php bloginfo(url); ?>/en-construccion/">Pastorales</a>
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
        <a href="<?php bloginfo(url); ?>/en-construccion">La Emilia</a>
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
  <a style="font-size:1.3em;" class="toggle w3-bar-item w3-button w3-hide-medium w3-hide-large w3-left" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
    <i class="Toggle fa fa-bars" style="color:#4b4b4b;"></i>
  </a>
  <a class="w3-bar-item titular" href="<?php bloginfo(url); ?>" >Obispado de San Nicolas</a>
  <div id="navDemo" style="display:inline-block" class=" w3-hide w3-hide-large w3-hide-medium">

    <!-- Aca van todos los menus con desplegables -->
    <button class="accordion1 w3-bar-item w3-hover-light-gray"><i class="fa fa-arrow-down	"></i> Diocesis </button>
    <div class="panel1 w3-animate-left">
      <a href="<?php bloginfo(url); ?>/historia/" class="w3-bar-item w3-button w3-hover-light-gray" ><i class="fa fa-arrow-right	"></i> Historia </a>
      <a href="<?php bloginfo(url); ?>/curia/" class="w3-bar-item w3-button w3-hover-light-gray" ><i class="fa fa-arrow-right	"></i> Curia </a>
      <a href="<?php bloginfo(url); ?>/parroquia/" class="w3-bar-item w3-button w3-hover-light-gray" ><i class="fa fa-arrow-right	"></i> Parroquias </a>
      <a href="<?php bloginfo(url); ?>/colegio-religioso/" class="w3-bar-item w3-button w3-hover-light-gray" ><i class="fa fa-arrow-right	"></i> Colegios Religiosos</a>
      <a href="<?php bloginfo(url); ?>/vida-consagrada/" class="w3-bar-item w3-button w3-hover-light-gray" ><i class="fa fa-arrow-right	"></i> Vida Consagrada </a>
      <a href="<?php bloginfo(url); ?>/pastorales/" class="w3-bar-item w3-button w3-hover-light-gray" ><i class="fa fa-arrow-right	"></i> Pastorales </a>
      <a href="<?php bloginfo(url); ?>/crescencia/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Beata Crescencia </a>
    </div>
    <button class="accordion1 w3-bar-item w3-hover-light-gray"><i class="fa fa-arrow-down	"></i> Obispo </button>
    <div class="panel1 w3-animate-left">
      <a href="<?php bloginfo(url); ?>/obispo-actual/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Actual </a>
      <a href="<?php bloginfo(url); ?>/obispos-anteriores/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Anteriores </a>
    </div>
    <a href="<?php bloginfo(url); ?>/sacerdotes/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Sacerdotes</a>
    <a href="<?php bloginfo(url); ?>/catedral/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Catedral </a>
    <button class="accordion1 w3-bar-item w3-hover-light-gray"><i class="fa fa-arrow-down	"></i> Santuario </button>
    <div class="panel1 w3-animate-left">
      <a href="<?php bloginfo(url); ?>/santuario-de-san-nicolas/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Maria del Rosario </a>
      <a href="<?php bloginfo(url); ?>/santuario-la-emilia/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> La Emilia </a>
    </div>
    <a href="<?php bloginfo(url); ?>/noticias/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Noticias </a>
    <a href="<?php bloginfo(url); ?>/contacto/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-arrow-right	"></i> Contacto </a>
    <a href="<?php bloginfo(url); ?>/radio/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-play-circle-o	"></i> Radio </a>
    <a href="https://www.facebook.com/obispadosn/" class="w3-bar-item w3-button w3-hover-light-gray"><i class="fa fa-facebook-official"></i> Facebook </a>

  </div>
      <style>
        #navDemo > button.accordion1,#navDemo > .panel1 > a,#navDemo > a {
          width: 100%;
          text-align: left;
          border-bottom: 1px solid #817e5d !important;
        }
        button.accordion1 , div.panel1 a{
            font-family: verdana,sans-serif;
        }
        button.accordion1 {
            background-color: #a29f76;
            color: #4b4b4b;
            cursor: pointer;
            width: 100%;
            text-align: left;
            outline: none;
            transition: 0.4s;
        }
        i.fa{color:#4b4b4b}
        div.panel1 {
            display: none;
            /*border: 1px solid #4b4b4b;*/
            background-color:#a29f76;
            /*border-top: none;*/
            /*background-color:#616161;*/
            margin: 0 30px;
        }
        /*div.panel a{color:white;}*/
        </style>
      <script type="text/javascript">
        var acc1 = document.getElementsByClassName("accordion1");
        var i1;

        for (i1 = 0; i1 < acc1.length; i1++) {
          acc1[i1].onclick = function(){
              this.classList.toggle("active");
              var panel1 = this.nextElementSibling;
              if (panel1.style.display === "block") {
                  panel1.style.display = "none";
              } else {
                  panel1.style.display = "block";
              }
          }
        }
      </script>
    <!--  -->
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
    z-index: 16;
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
    if (x.className.indexOf("w3-show w3-animate-top") == -1) {
        x.className += " w3-show w3-animate-top";
    } else {
        x.className = x.className.replace(" w3-show w3-animate-top", "");
    }
  }
</script>
