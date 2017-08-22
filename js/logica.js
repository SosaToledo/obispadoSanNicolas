function detect(){
  var elm = document.getElementById("obispoActual").offsetTop;
  var pantalla = document.getElementById("main").scrollTop;
  var ancho = screen.width;
  var info = document.getElementsByClassName("info");
  if(elm-500 < pantalla){
      for (var i = 0; i < info.length; i++) {
        info[i].className = "info animacion";
      }
  }
  var nav = document.getElementById("barra").style;
  if ((pantalla>200 && ancho>500) || (pantalla>500 && ancho < 500)){
    nav.position = "fixed";
    nav.top = "0";
  }else{
    nav.position = "";
    nav.top = "";
  }

}
