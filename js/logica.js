function detect(){
  var elm = document.getElementById("obispoActual").offsetTop;
  var pantalla = document.getElementById("main").scrollTop;
  var ancho = screen.width;
  var info = document.getElementsByClassName("info");
  if(elm-500 < pantalla){
      document.getElementById("IA").className = "info animacionIA";
      document.getElementById("IC").className = "info animacionIC";
      document.getElementById("IB").className = "info animacionIB";
      document.getElementById("DA").className = "info animacionDA";
      document.getElementById("DC").className = "info animacionDC";
      document.getElementById("DB").className = "info animacionDB";
  }
  var nav = document.getElementById("barra").style;
  if ((pantalla>200 && ancho>500) || (ancho < 500)){
    nav.position = "fixed";
    nav.top = "0";
  }else{
    nav.position = "";
    nav.top = "";
  }

}
