<?php
$mysqli = new mysqli("localhost", "hacker",
"seguridadmaxima", "vulnerable");
$usuario = $_GET['usuario'];
$sql = "SELECT * FROM observaciones WHERE usuario='$usuario'";
$resultado = $mysqli->query($sql);
$tabla = "<table border='1'>";
foreach ($resultado as $fila){
$tabla=$tabla . "<tr>";
foreach ($fila as $k=>$v){
$tabla=$tabla ."<td>" . $v . "</td>";
}
$tabla=$tabla."</tr>";
}
$tabla=$tabla . "</table>";
echo $tabla;
?>