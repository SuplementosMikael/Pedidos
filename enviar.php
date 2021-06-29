<?php  

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Datos para el correo
$destinatario = "jhunherrerap@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $phone \n";
$carta .= "Mensaje: $message";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:contact.html');

?>
