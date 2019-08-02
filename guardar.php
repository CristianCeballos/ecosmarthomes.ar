<?php

include("db.php");

if(isset($_POST['guardar'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $city = $_POST['city'];


    


$query="INSERT INTO Mensajes(nombre,email,mensaje,ciudad) VALUES('$name','$email','$message','$city')";

$resultado = mysqli_query($conn,$query);

if(!$resultado)
{
  header("Location:conError.php");
}

/* $_SESSION['message']='Noticia Guardada';
$_SESSION['message_type']='success'; */

$to = "Usuario <ecosmarthomes.ar@gmail.com>";
$subjet = "Mensaje recibido con exito.";
 
// Cabeceras
$headers = 'From: info@ecosmarthomes.com.ar' . "\r\n" .
'Reply-To: hugonzalez@ecosmarthomes.com.ar' . "\r\n" .
'Cc: marx.chc@gmail.com' . "\r\n" .
'Bcc: h.fuhr@ecosmarthomes.com.ar' . "\r\n" .
'Mime-Version: 1.0' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
 
// Mensaje de correo

/* $mensaje = '
<html>
<head>
  <title>Nuevo mensaje</title>
</head>
<body>
  <p>Datos del mensaje</p>
  <table>
    <tr>
      <th>Nombre</th><th>'$name'</th>
    </tr>
    <tr>
      <td>Email</td><td>'$email'</td>
    </tr>
    <tr>
      <td>Mensaje</td><td>'$message'</td>
    </tr>
    <tr>
    <td>Ciudad</td><td>'$city'</td>
  </tr>
  </table>
</body>
</html>
'; */



$mensaje = "Nombre: ".$name." "."Email: ".$email." "."Mensaje: ".$message." "."Ciudad: ".$city; 
 
// Enviamos el mensaje
$envio = mail($to, $subjet, $mensaje, $headers);


header("Location:conExito.php");
}

?>