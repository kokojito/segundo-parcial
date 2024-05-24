<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sistema', '3306');
   if($_POST)
   {
      $password = $_POST["password"];
      $login = $_POST["login"];
     $consulta = "select * from usuarios where login='$login' && password = sha1('$password')";
     $resultado = mysqli_query($conexion, $consulta);
      $mostrar = mysqli_fetch_array($resultado);
      if($mostrar)echo "bienvenido cuate";
      else  echo "como que no jalo ";
   mysqli_close($conexion);
   }
?>