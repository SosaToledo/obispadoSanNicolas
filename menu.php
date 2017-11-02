<nav id="barra">
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
        <!-- <a href="<?php bloginfo(url); ?>/en-construccion/">Beata Crescencia</a> -->
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
      <a href="#">Actualidad</a><span class="iconoSpan" onclick="desplegarSubMenu()">&#187;
</span>
      <div class="dropdown-content">
        <a href="<?php bloginfo(url);?>/noticias">Noticias</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#">Contacto</a>
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
