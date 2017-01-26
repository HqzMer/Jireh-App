<?php
$server='localhost';
$usuario='root';
$clave='';
$bd='jireh';
$conexion = mysql_connect($server, $usuario, $clave, $bd);
if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
echo 'Conectado  satisfactoriamente al servidor <br />';
}
mysql_select_db($bd, $conexion) or die(mysql_error($conexion));

?>