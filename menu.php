<nav id="barra">
  <p id="cerrarMenu" onclick="ocultarMenu()">&#x274C;</p>
  <p class="iconMenu" onclick="desplegarMenu()">&#9776;</p>
    <div class="dropdown">
      <a href="<?php bloginfo(url); ?>">Inicio</a>
    </div>
    <div class="dropdown">
      <a href="#">Diocesis</a><span class="iconoSpan" onclick="desplegarSubMenu()">>></span>
      <div class="dropdown-content">
        <a href="#">Historia</a>
        <a href="#">Curia</a>
        <a href="#">Parroquia</a>
        <a href="#">Colegio Religiosos</a>
        <a href="#">Vida Consagrada</a>
        <a href="#">Pastorales</a>
        <a href="#">Beata Crescencia</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#">Obispo</a><span class="iconoSpan" onclick="desplegarSubMenu()">>></span>
      <div class="dropdown-content">
        <a href="<?php bloginfo(url); ?>/obispo-actual/">Actual</a>
        <a href="<?php bloginfo(url); ?>/obispos-anteriores/">Anteriores</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#">Sacerdotes</a>
    </div>
    <div class="dropdown">
      <a href="#">Catedral</a>
    </div>
    <div class="dropdown">
      <a href="#">Santuario</a><span class="iconoSpan" onclick="desplegarSubMenu()">>></span>
    </div>
    <div class="dropdown">
      <a href="<?php bloginfo(url); ?>/noticias">Actualidad</a><span class="iconoSpan" onclick="desplegarSubMenu()">>></span>
      <div class="dropdown-content">
        <a href="#">Noticas</a>
        <a href="#">Audio</a>
        <a href="#">Video</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#">Contacto</a>
    </div>
    <a href="<?php bloginfo(url)?>/radio">
      <img style="width:32px; height: 32px; margin:3px 14px 3px 3px;"src="<?php bloginfo('template_url') ?>/img/iconos/radio.png" alt="Radio">
    </a>
    <a href="https://www.facebook.com/obispadosn/">
      <img style="width:32px; height: 32px; margin:3px;"src="<?php bloginfo('template_url') ?>/img/iconos/facebook.png" alt="Facebook">
    </a>
  </nav>
