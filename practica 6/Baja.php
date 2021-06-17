<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$vCiudad = $_POST['ciu'];
$vPais = $_POST['pais'];
$vSql = "SELECT * FROM Capitales  WHERE ciudad='$vCiudad' and pais='$vPais'";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
{
echo ("Capital Inexistente...!!! <br>");
echo ("<A href='FormBajaIni.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM Capital WHERE ciudad='$vCiudad' and pais='$vPais'";
mysqli_query($link, $vSql);
echo("La capital fue Borrada<br>");
echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>