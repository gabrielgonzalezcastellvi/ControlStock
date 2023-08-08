<?php 
require 'conexion.php';
$Cantidad = $_POST['cantidad'];
$Codigoii = $_POST['codigoii'];
$Segmento = $_POST['segmento'];
$Material = $_POST['material'];
$Descripcion = $_POST['descripcion'];
$Presentacion = $_POST['presentacion'];
$linea = $_POST['linea'];
$Fuente = $_POST['fuente'];
$Ean = $_POST['ean'];
$Iva = $_POST['iva'];
$PrecioLista = $_POST['precioLista'];
$PvpSugerido = $_POST['pvpsugerido'];
$PvpPremium = $_POST['pvppremium'];
$NumVenta = $_POST['numventa'];


$Codigoii = filter_var($Codigoii,FILTER_SANITIZE_SPECIAL_CHARS);
$Segmento = filter_var($Segmento,FILTER_SANITIZE_SPECIAL_CHARS);
$Material = filter_var($Material,FILTER_SANITIZE_SPECIAL_CHARS);
$Descripcion = filter_var($Descripcion,FILTER_SANITIZE_SPECIAL_CHARS);
$Presentacion = filter_var($Presentacion,FILTER_SANITIZE_SPECIAL_CHARS);
$Linea = filter_var($Linea,FILTER_SANITIZE_SPECIAL_CHARS);
$Fuente = filter_var($Fuente,FILTER_SANITIZE_SPECIAL_CHARS);
$Ean = filter_var($Ean,FILTER_SANITIZE_SPECIAL_CHARS);
$Iva = filter_var($Iva,FILTER_SANITIZE_SPECIAL_CHARS);
$PrecioLista = filter_var($PrecioLista,FILTER_SANITIZE_SPECIAL_CHARS);
$PvpSugerido = filter_var($PvpSugerido,FILTER_SANITIZE_SPECIAL_CHARS);
$PvpPremium = filter_var($PvpPremium,FILTER_SANITIZE_SPECIAL_CHARS);

$QueryNumVenta = "INSERT INTO `ventasskil`(`id`, `codigoii`, `segmento`, `material`, `descripcion`, `presentacion`, `linea`, `fuente`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`, `numventa`) VALUES ('0','0','0','0','0','0','0','0','0','0','0','0','0','0','$NumVenta')";
$ResultNumVenta = mysqli_query($conexion,$QueryNumVenta);

if($ResultNumVenta == true){
$Query = "INSERT INTO `ventasskil`(`id`, `codigoii`, `segmento`, `material`, `descripcion`, `presentacion`, `linea`, `fuente`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`,`numventa`) VALUES ('DEFAULT','$Codigoii','$Segmento','$Material','$Descripcion','$Presentacion','$linea','$Fuente','$Ean','$Iva','$PrecioLista','$PvpSugerido','$PvpPremium','$Cantidad','$NumVenta')";

$ResultFinal = mysqli_query($conexion,$Query);

$A = $ResultFinal ? header("Location: ./ventasSkil.php") : 'No se pudo sumar el producto'; 
}

?>