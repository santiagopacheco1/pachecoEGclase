<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_POST['ciu'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTienemetro = $_POST['tienemetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE capitales set  habitantes='$vHabitantes',superficie='$vSuperficie',tienemetro='$vTienemetro' where ciudad='$vCiudad' and pais='$vPais'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La capital fue Modificado<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>