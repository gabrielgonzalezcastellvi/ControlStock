<?php 
require 'conexion.php';
$Cantidad = $_POST['cantidad'];
$Codigo2 = $_POST['codigoii'];
$Segmento = $_POST['segmento'];
$Material = $_POST['material'];
$Descripcion = $_POST['descripcion'];
$Presentacion = $_POST['presentacion'];
$Linea = $_POST['linea'];
$Fuente = $_POST['fuente'];
$Ean = $_POST['ean'];
$Iva = $_POST['iva'];
$PrecioLista = $_POST['precioLista'];
$PvpSugerido = $_POST['pvpsugerido'];
$PvpPremium = $_POST['pvppremium'];
$NumVenta = $_POST['numventa'];

$MargenDescuento = $_POST['margendescuento'];
$Descuento = $_POST['descuento'];


$Codigo2 = filter_var($Codigo2,FILTER_SANITIZE_SPECIAL_CHARS);
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

if(!empty($MargenDescuento)){
 if($MargenDescuento == 32 ){
 $MargenDescuento = $MargenDescuento / 100;
 $MargenDescuento = 1 - $MargenDescuento;
 $PrecioLista = $MargenDescuento * $PrecioLista;

 if($Descuento == 10){
$PrecioLista = $PrecioLista * 0.90;
 }else{
$PrecioLista = $PrecioLista * 0.85;
 }
 }else{
  $MargenDescuento = $MargenDescuento / 100;
  $MargenDescuento = 1 - $MargenDescuento;
  $PrecioLista = $PrecioLista * $MargenDescuento;
 } 
}

$QueryNumVenta = "INSERT INTO `ventasbosch`(`id`,`codigoii`, `segmento`, `material`, `descripcion`, `presentacion`, `linea`, `fuente`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`,`numventa`) VALUES ('DEFAULT','0','0','0','0','0','0','0','0','0','0','0','0','0','$NumVenta')";
$ResultNumVenta = mysqli_query($conexion,$QueryNumVenta);

if($ResultNumVenta == true){
$Query = "INSERT INTO `ventasbosch`(`id`,`codigoii`, `segmento`, `material`, `descripcion`, `presentacion`, `linea`, `fuente`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`,`numventa`) VALUES ('DEFAULT','$Codigo2','$Segmento','$Material','$Descripcion','$Presentacion','$Linea','$Fuente','$Ean','$Iva','$PrecioLista','$PvpSugerido','$PvpPremium','$Cantidad','$NumVenta')";

$ResultFinal = mysqli_query($conexion,$Query);

$A = $ResultFinal ? header("Location: ./ventasBosch.php") : 'No se pudo sumar el producto'; 
}

?>