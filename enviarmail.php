<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
<?php

$nombre = $_POST['nombre'];

$email = $_POST['email'];
$consulta = $_POST['consulta'];
$asunto = "Has recibido una nueva consulta";
$contenido = "Nombre: " .$nombre ."<br>correo: " . $email . "Ha escrito: " . $consulta;

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabeceras .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";



echo $nombre;

echo $email;

echo $consulta;



$enviarmail=mail('mathirusln@hotmail.com',$asunto,$contenido,$cabeceras);




if($enviarmail==true){
echo "Gracias por su consulta ".$nombre." nos estaremos comunicando a la brevedad";}else{
 echo "Hubo un error"; };




?>

</body>
</html>
