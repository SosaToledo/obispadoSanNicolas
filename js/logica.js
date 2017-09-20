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
  var info = document.getElementsByClassName("info");
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
