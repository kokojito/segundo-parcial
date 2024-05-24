<?php

$conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');

$consulta = "select * from city";
$resultado = mysqli_query($conexion, $consulta);
echo "<table border = 1>";
while($mostrar = mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo " <td>" .$mostrar['ID']."</td>";
    echo " <td>" .$mostrar['Name']."</td>";
    echo " <td>" .$mostrar['CountryCode']."</td>";
    echo " <td>" .$mostrar['District']."</td>";
    echo " <td>" .$mostrar['Population']."</td>";
    echo "</tr>";

}
echo "</table>";

mysqli_close($conexion);
?>