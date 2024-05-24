<?php
     //paso 1: Conecterase a un servidor y una base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'world', '3306');


     //paso 2: Realizar la accion (insert, update, etc)

        $consulta = "insert into city(name, countrycode, district, population) values ('la deseada', 'mex', 'guanajuato', 124)";

        $resultado = mysqli_query($conexion, $consulta);


     //paso 3: Cerrar conexion
     mysqli_close($conexion);

     echo "proceso terminado";
?>