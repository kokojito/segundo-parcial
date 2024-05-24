<?php
   $conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');

if($_POST)
{
    $id = $_POST["id"];
  
    
    $consulta = "delete from city where id=$id";
    $resultado = mysqli_query($conexion, $consulta);

    mysqli_close($conexion);

     echo "proceso terminado";
}
?>