<?php
require 'conexion.php';
date_default_timezone_set("America/Argentina/Mendoza");
session_start();
$Usuario = $_POST['usuario'];
$Email = $_POST['usuario'];
$Clave = $_POST['clave'];
 //Session

 $QuerySesion = "SELECT nombre FROM administrador WHERE email = '$Email' OR nombre= '$Usuario'";
 
 $Result = $conexion->query($QuerySesion);

 while($rowSesion = $Result->fetch_assoc()){
 $_SESSION['NombreUsuario'] = $rowSesion;
 }


$ClaveEncriptada = md5(sha1($Clave));


$Query2 = "SELECT * FROM `administrador` WHERE `nombre` = '$Usuario' AND `claveencriptada` = '$ClaveEncriptada' OR `email` = '$Email' AND `claveencriptada` = '$ClaveEncriptada'";


$Ejecucion = mysqli_query($conexion,$Query2) or die($conexion);

while($rows = $Ejecucion->fetch_assoc()){
 $Id = $rows['id'];
}


 if(!$Ejecucion){
    Header('Location:./error.php');
 }else{

    $rows = mysqli_num_rows($Ejecucion);

    if($rows > 0){

    if($Ejecucion){
       Header('Location:./bosh.php');
    }
    

    }else{

        unset($_POST['usuario']);
        unset($_POST['clave']);

        echo"<script type='text/javascript'> alert('Los datos ingresados son incorrectos. Por favor inténtalo nuevamente');
        window.location.href='index.php';</script>";
    }
 } 


?>