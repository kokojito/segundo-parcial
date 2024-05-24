<?php
   $conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');

if($_POST)
{
    $City = $_POST["Ci"];
    $CodigoCiudad= $_POST["c"];
    $estado= $_POST["e"];
    $poblacion= $_POST["P"];
    
    $consulta = "insert into city(name, countrycode, district, population) values ('$City', '$CodigoCiudad', '$estado', $poblacion)";
    
    $resultado = mysqli_query($conexion, $consulta);

    mysqli_close($conexion);

     echo "proceso terminado";
}
?>