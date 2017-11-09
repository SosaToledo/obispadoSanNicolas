<?php
$persona = $_POST['nombre'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

$destinatario = "luchososa1990@gmail.com";
$asunto = "Consulta o carta a la Iglesia";
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
$bool = mail($destinatario,$asunto,$cuerpo);
if ($bool) {
  header("location: gracias.html");
}else{
  header("location: error.html");
}
 ?>
