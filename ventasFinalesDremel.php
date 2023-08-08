<?php
require 'conexion.php';

(int)$NumVenta = $_POST['numventa'];

$QueryVentas = "SELECT * FROM ventasdremel WHERE numventa = '$NumVenta'";
$resultado = mysqli_query($conexion,$QueryVentas);

while($row0 = $resultado->fetch_assoc()){
$Cantidad = $row0['cantidad'];
$Codigoii = $row0['codigoii'];
$Familia= $row0['familia'];
$SubFamilia = $row0['subfamilia'];
$Descripcion = $row0['descripcion'];
$Ean = $row0['ean'];
$Iva = $row0['iva'];
$PrecioLista = $row0['preciolista'];
$PvpSugerido = $row0['pvpsugerido'];
$PvpPremium= $row0['pvppremium'];
$NumVenta= $row0['numventa'];

$Codigoii = filter_var($Codigoii,FILTER_SANITIZE_SPECIAL_CHARS);
$Familia = filter_var($Familia,FILTER_SANITIZE_SPECIAL_CHARS);
$SubFamilia = filter_var($SubFamilia,FILTER_SANITIZE_SPECIAL_CHARS);
$Descripcion = filter_var($Descripcion,FILTER_SANITIZE_SPECIAL_CHARS);
$Ean = filter_var($Ean,FILTER_SANITIZE_SPECIAL_CHARS);
$Iva = filter_var($Iva,FILTER_SANITIZE_SPECIAL_CHARS);
$PrecioLista = filter_var($PrecioLista,FILTER_SANITIZE_SPECIAL_CHARS);
$PvpSugerido = filter_var($PvpSugerido,FILTER_SANITIZE_SPECIAL_CHARS);
$PvpPremium = filter_var($PvpPremium,FILTER_SANITIZE_SPECIAL_CHARS);

$Total = $PrecioLista * $Cantidad;

$Ingreso = "INSERT INTO `ventasfinalesdremel`(`id`, `codigoii`, `familia`, `subfamilia`, `descripcion`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`,`total`,`numventa`) VALUES ('DEFAULT','$Codigoii','$Familia','$SubFamilia','$Descripcion','$Ean','$Iva','$PrecioLista','$PvpSugerido','$PvpPremium','$Cantidad','$Total','$NumVenta')";

$InsertarDatos = mysqli_query($conexion,$Ingreso);

$QueryPruebas = "SELECT codigoii FROM ventasfinalesdremel WHERE codigoii = '$Codigoii' AND numventa = '$NumVenta'";
$Result = mysqli_query($conexion,$QueryPruebas);

while($row = $Result->fetch_assoc()){
$Codigo2 = $row['codigoii'];
}


$QueryStockActual = "SELECT cantidad FROM dremel WHERE codigoii = '$Codigo2'";
$ResultStockActual = mysqli_query($conexion,$QueryStockActual);
while($row2 = $ResultStockActual->fetch_assoc()){
$StockActual = $row2['cantidad'];
}

$NuevoStock = $StockActual - $Cantidad;

$QueryActualizacion = "UPDATE dremel SET cantidad = '$NuevoStock' WHERE codigoii = '$Codigo2'";


$ResultActualizacion = mysqli_query($conexion,$QueryActualizacion);
}

$B = $ResultActualizacion ? header("Location: ./ventasDremel.php") : 'No se pudo actualizar el stock'; 

?>