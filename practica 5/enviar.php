<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="santi.pacheco100100@gmail.com"; /*"micorreo@dominio.com";*/
$asunto="Comentario";
$desde='From:' .$_POST['email'];
$comentario= "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[texto]\n
Enviado: $fecha a las $hora\n
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
?>