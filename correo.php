<?php
$persona = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$consulta = $_POST["mensaje"];

  $destinatario = "luchososa1990@gmail.com";
  $cuerpo = '
  <html>
  <head>
     <title>Consulta</title>
  </head>
  <body>
  <h1>'.$persona.'</h1>
  <p>
  Responder a: '.$correo.'
  </p>
  <p>
  '.$consulta.'
  </p>
  </body>
  </html>
  ';

  //para el envío en formato HTML
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

  //dirección del remitente
  $headers .= "From: ".$persona." < ".$correo." >\r\n";


  mail($destinatario,$asunto,$cuerpo,$headers);
  header('Location: http://obispadodesannicolas.com/contacto/');
  alert("Gracias, tu correo se envio.");
?>
<?php  include 'despedida.php';?>
