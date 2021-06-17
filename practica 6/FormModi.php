<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_POST['ciu'];
$vPais = $_POST['pais'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM Capitales  WHERE ciudad='$vCiudad' and pais='$vPais'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
echo ("Capital Inexistente...!!! <br>");
echo ("<A href='FormModiIni.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
<td width="103"> Ciudad: </td>
<td width="243"> <input type="text" name="ciu" value="<?php echo($fila['ciu']); ?>">
</td>
</tr>
<tr>
<td width="103"> Ingrese Pais: </td>
<td width="243"> <input type="TEXT" name="Pais" size="20" maxlength="20"
value="<?php echo($fila['Pais']); ?>">
</td>
</tr>
<tr>
<td width="103"> habitantes: </td>
<td width="243"> <input type="TEXT" name="habitantes" size="20" maxlength="20"
value="<?php echo($fila['habitantes']); ?>">
</td>
</tr>
<tr>
<td width="103"> superficie: </td>
<td width="243"> <input type="TEXT" name="superficie" size="20" maxlength="40"
value="<?php echo($fila['superficie']); ?>">
</td>
</tr>
<tr>
<td width="103"> tiene metro: </td>
<td width="243"> <input type="TEXT" name="tienemetro" size="20" maxlength="40"
value="<?php echo($fila['tienemetro']); ?>">
</td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar">
</td>
</tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>