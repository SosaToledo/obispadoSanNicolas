function obispoDetect(){
  var elm = document.getElementById("obispoActual").offsetTop;
  var pantalla = document.getElementById("main").scrollTop;

  if(elm-200 < pantalla){

  }

}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
