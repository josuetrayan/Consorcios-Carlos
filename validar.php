<?php

session_start();


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario']=$usuario;

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","usuarios");
$consulta="SELECT * FROM registrar WHERE Nombre='$usuario' and Password='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
if($usuario=='alem147'){
    header("location:bienvenido.php");
}
if($usuario=='Carlos Trayan'){
    header("location:admin.php");
}

   
}
else{
    echo"Error en la autenticacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
