<?php
$to = "mariaalejandralomeli@gmail.com";
$subject = "Contact";
$message = $_POST['msj'];
$headers = "From: " . $_POST['correo'] . "\r\n" . $_POST['nombre'] ."\r\n". $_POST['correo'];

mail($to,$subject,$message,$headers);
header("location: ../index.html");
?>