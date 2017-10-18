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

document.getElementById('lupa').addEventListener("click", desplegar);
function desplegar(){
  var lupa = document.getElementById('inputLupa');
  if (lupa.value == '') {
  }else {
    alert('buscando... '+lupa.value);
  }
}
