<?php
$destino=From:"$_POST['email']"; /*"micorreo@dominio.com";*/
$asunto="recomendacion de pagina";
$comentario= "
hola $_POST['nombre'] te recomendamos esta pagina
";
mail($destino,$asunto,$comentario,);
echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
?>