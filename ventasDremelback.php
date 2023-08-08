<?php 
require 'conexion.php';
$Cantidad = $_POST['cantidad'];
$Codigo2 = $_POST['codigoii'];
$Familia = $_POST['familia'];
$SubFamilia = $_POST['subfamilia'];
$Descripcion = $_POST['descripcion'];
$Ean = $_POST['ean'];
$Iva = $_POST['iva'];
$PrecioLista = $_POST['precioLista'];
$PvpSugerido = $_POST['pvpsugerido'];
$PvpPremium = $_POST['pvppremium'];
$NumVenta = $_POST['numventa'];


$Codigo2 = filter_var($Codigo2,FILTER_SANITIZE_SPECIAL_CHARS);
$Familia = filter_var($Familia,FILTER_SANITIZE_SPECIAL_CHARS);
$SubFamilia = filter_var($SubFamilia,FILTER_SANITIZE_SPECIAL_CHARS);
$Descripcion = filter_var($Descripcion,FILTER_SANITIZE_SPECIAL_CHARS);
$Ean = filter_var($Ean,FILTER_SANITIZE_SPECIAL_CHARS);
$Iva = filter_var($Iva,FILTER_SANITIZE_SPECIAL_CHARS);
$PrecioLista = filter_var($PrecioLista,FILTER_SANITIZE_SPECIAL_CHARS);
$PvpSugerido = filter_var($PvpSugerido,FILTER_SANITIZE_SPECIAL_CHARS);
$PvpPremium = filter_var($PvpPremium,FILTER_SANITIZE_SPECIAL_CHARS);

$QueryNumVenta = "INSERT INTO `ventasdremel`(`id`,`codigoii`, `familia`, `subfamilia`, `descripcion`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`,`numventa`) VALUES ('DEFAULT','0','0','0','0','0','0','0','0','0','0','$NumVenta')";
$ResultNumVenta = mysqli_query($conexion,$QueryNumVenta);

if($ResultNumVenta == true){
$Query = "INSERT INTO `ventasdremel`(`id`,`codigoii`, `familia`, `subfamilia`, `descripcion`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`,`numventa`) VALUES ('DEFAULT','$Codigo2','$Familia','$SubFamilia','$Descripcion','$Ean','$Iva','$PrecioLista','$PvpSugerido','$PvpPremium','$Cantidad','$NumVenta')";

$ResultFinal = mysqli_query($conexion,$Query);

$A = $ResultFinal ? header("Location: ./ventasDremel.php") : 'No se pudo sumar el producto'; 
}

?>