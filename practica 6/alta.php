<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_POST['ciu'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTienemetro = $_POST['tienemetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT ciudad,pais as ciupa FROM Capitales  WHERE ciudad='$vCiudad' and pais='$vPais'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiu = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCiu ['ciupa']!=0){
echo ("La capital ya Existe<br>");
echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO Capitales (ciudad, pais, habitantes, superficie, tienemetro)
values ('$vCiudad','$vPais','$vHabitantes', '$vSuperficie', '$vTienemetro')";
mysqli_query($link, $vSql) or die (mysqli_error($link));
echo("La Capital fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a nuestra pagina<br>");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>