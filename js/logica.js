function detect(){
  var elm = document.getElementById("obispoActual").offsetTop;
  var pantalla = document.getElementById("main").scrollTop;
  var ancho = screen.width;
  // if(elm-200 < pantalla){
  // }
  var nav = document.getElementById("barra").style;
  if ((pantalla>200 && ancho>500) || (pantalla>500 && ancho < 500)){
    nav.position = "fixed";
    nav.top = "0";
  }else{
    nav.position = "";
    nav.top = "";
  }

}
