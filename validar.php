<?php

session_start();


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario']=$usuario;

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","dbcarlos");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
// AGREGAR VALIDACION POR SI ESCRIBEN EN MINUSCULA JOSUE
if ($filas>0){

    if($usuario=='2deabril380'){
        header("location:2deabril380.php");
    }

if($usuario=='24SEPTIEMBRE304'){
    header("location:24SEPTIEMBRE304.php");
}
if($usuario=='25MAYO30'){
    header("location:25MAYO30.php");
}
if($usuario=='ALEM146-150'){
    header("location:ALEM146-150.php");
}
if($usuario=='BALCARCE179'){
    header("location:BALCARCE179.php");
}
if($usuario=='BELGRANO3406'){
    header("location:BELGRANO3406.php");
}
if($usuario=='CONGRESALES'){
    header("location:CONGRESALES.php");
}
if($usuario=='CONGRESO850'){
    header("location:CONGRESO850.php");
}
if($usuario=='CORRIENTES961'){
    header("location:CORRIENTES961.php");
}
if($usuario=='EJERCITOYMENDOZA'){
    header("location:EJERCITOYMENDOZA.php");
}
if($usuario=='ENTREREIOS63'){
    header("location:ENTREREIOS63.php");
}
if($usuario=='GONZALO'){
    header("location:GONZALO.php");
}
if($usuario=='JADE'){
    header("location:JADE.php");
}
if($usuario=='LAPRIDA1255'){
    header("location:LAPRIDA1255.php");
}
if($usuario=='LAVALLE84'){
    header("location:LAVALLE84.php");
}
if($usuario=='MENDOZA480'){
    header("location:MENDOZA480.php");
}
if($usuario=='MONTEAGUDO511'){
    header("location:MONTEAGUDO511.php");
}
if($usuario=='MUÑECAS458'){
    header("location:MUÑECAS458.php");
}
if($usuario=='SANTIAGO671'){
    header("location:SANTIAGO671.php");
}
if($usuario=='SANLORENZOYHERAS'){
    header("location:SANLORENZOYHERAS.php");
}

if($usuario=='MONTEAGUDO731'){
    header("location:MONTEAGUDO731.php");
}
if($usuario=='PJESANTILLAN936'){
    header("location:PJESANTILLAN936.php");
}
if($usuario=='CATAMARCA655'){
    header("location:CATAMARCA655.php");
}
if($usuario=='BALCARCE670'){
    header("location:BALCARCE670.php");
}

if($usuario=='SANTIAGO48'){
    header("location:SANTIAGO48.php");
}
if($usuario=='LASPIEDRAS297'){
    header("location:LASPIEDRAS297.php");
}
if($usuario=='SANJUAN649'){
    header("location:SANJUAN649.php");
}
if($usuario=='ENTRERIOS167'){
    header("location:ENTRERIOS167.php");
}
if($usuario=='LAMADRID910'){
    header("location:LAMADRID910.php");
}
if($usuario=='GOBERNADORCAMPO'){
    header("location:GOBERNADORCAMPO.php");
}
if($usuario=='25MAYO312'){
    header("location:25MAYO312.php");
}
if($usuario=='CRISOSTOMO352'){
    header("location:CRISOSTOMO352.php");
}
if($usuario=='MENDOZA1053'){
    header("location:MENDOZA1053.php");
}

if($usuario=='carlostrayan'){
    header("location:admin.php");
}
}
   

else{
    echo"Error en la autenticacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
