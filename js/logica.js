function detect(){
  var ancho = screen.width;
  var pantalla = document.getElementById("main").scrollTop;
  var nav = document.getElementById("barra").style;
  if ((pantalla>360 && ancho>500) || (ancho < 500)){
    nav.position = "fixed";
    nav.top = "0";
  }else{
    nav.position = "";
    nav.top = "";
  }
  var elm = document.getElementById("obispoActual").offsetTop;
  if(elm-500 < pantalla && ancho>500){
      document.getElementById("IA").className = "info animacionIA";
      document.getElementById("IC").className = "info animacionIC";
      document.getElementById("IB").className = "info animacionIB";
      document.getElementById("DA").className = "info animacionDA";
      document.getElementById("DC").className = "info animacionDC";
      document.getElementById("DB").className = "info animacionDB";
  }

}
document.getElementsByClassName('iconMenu')[0].addEventListener("click", desplegarMenu);
  function desplegarMenu() {
    document.getElementById('barra').className = "abierto";
    document.getElementById('cerrarMenu').style.visibility = "visible";
    document.getElementsByClassName('iconMenu')[0].style.display = "none";
    var elem = document.getElementsByClassName('dropdown');
    var i = 0;
    for (e of elem) {
      e.style.visibility ="visible";
    }
  }
document.getElementById('cerrarMenu').addEventListener("click", ocultarMenu);
function ocultarMenu() {
  document.getElementById('barra').className = "";
  document.getElementById('cerrarMenu').style.visibility = "hidden";
  document.getElementsByClassName('iconMenu')[0].style.display = "block";
  var elem = document.getElementsByClassName('dropdown');
  var i = 0;
  for (e of elem) {
    e.style.visibility ="hidden";
  }
}
function desplegar(){
  document.getElementById('lupa').className = "imgLupa animacionDesplegar";
}
