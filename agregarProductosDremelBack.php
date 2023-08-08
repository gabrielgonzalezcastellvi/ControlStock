<?php

require 'conexion.php';

$CantidadProducto = $_POST['cantidadProducto'];
$Codigoi = $_POST['codigoi'];
$Codigoii = $_POST['codigoii'];
$Familia = $_POST['familia'];
$SubFamilia = $_POST['subfamilia'];
$Descripcion = $_POST['descripcion'];
$Ean = $_POST['ean'];
$Iva = $_POST['iva'];
$PrecioLista = $_POST['precioLista'];
$PvpSugerido = $_POST['pvpsugerido'];
$PvpPremium = $_POST['pvppremium'];

$nombre = $_FILES['thumb']['name'];
$guardar = $_FILES['thumb']['tmp_name'];

if (!file_exists('./images/')) {
    mkdir('images', 0777, true);
    if (file_exists('images')) {
        if (move_uploaded_file($guardar, './images/' . $nombre)) {
            echo "Subido!";
        } else {
            echo "Intenta subir tu imagen más tarde. Si no es posible, por favor reporta este problema";
        }
    }
} else {
    if (move_uploaded_file($guardar, './images/' . $nombre)) {

        header("Location:dremel.php");
    }
}

$Codigoi = filter_var($Codigoi, FILTER_SANITIZE_SPECIAL_CHARS);
$Codigoii = filter_var($Codigoii, FILTER_SANITIZE_SPECIAL_CHARS);
$Familia = filter_var($Familia, FILTER_SANITIZE_SPECIAL_CHARS);
$SubFamilia = filter_var($SubFamilia, FILTER_SANITIZE_SPECIAL_CHARS);
$Descripcion = filter_var($Descripcion, FILTER_SANITIZE_SPECIAL_CHARS);
$Ean = filter_var($Ean, FILTER_SANITIZE_SPECIAL_CHARS);
$Iva = filter_var($Iva, FILTER_SANITIZE_SPECIAL_CHARS);
$PrecioLista = filter_var($PrecioLista, FILTER_SANITIZE_SPECIAL_CHARS);
$PvpSugerido = filter_var($PvpSugerido, FILTER_SANITIZE_SPECIAL_CHARS);
$PvpPremium = filter_var($PvpPremium, FILTER_SANITIZE_SPECIAL_CHARS);

$Query = "INSERT INTO `dremel`(`id`, `codigoi`, `codigoii`, `familia`, `subfamilia`, `descripcion`, `ean`, `iva`, `preciosiniva`, `pvpsugerido`, `pvppremium`, `cantidad`, `thumb`) VALUES ('DEFAULT','$Codigoi','$Codigoii','$Familia','$SubFamilia','$Descripcion','$Ean','$Iva','$PrecioLista','$PvpSugerido','$PvpPremium','$CantidadProducto','$nombre')";

$Result = mysqli_query($conexion, $Query);

$A = $Result ? header("Location: ./dremel.php") : 'No sé pudo agregar el producto correctamente';
