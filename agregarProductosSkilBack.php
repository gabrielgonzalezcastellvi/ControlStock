<?php

require 'conexion.php';

$CantidadProducto = $_POST['cantidadProducto'];
$Codigoi = $_POST['codigoi'];
$Codigoii = $_POST['codigoii'];
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

        header("Location:bosh.php");
    } elseif (empty($guardar && $nombre)) {
        echo "No se subió la imagen";
    }
}

$Codigoi = filter_var($Codigoi, FILTER_SANITIZE_SPECIAL_CHARS);
$Codigoii = filter_var($Codigoii, FILTER_SANITIZE_SPECIAL_CHARS);
$Segmento = filter_var($Segmento, FILTER_SANITIZE_SPECIAL_CHARS);
$Material = filter_var($Material, FILTER_SANITIZE_SPECIAL_CHARS);
$Descripcion = filter_var($Descripcion, FILTER_SANITIZE_SPECIAL_CHARS);
$Presentacion = filter_var($Presentacion, FILTER_SANITIZE_SPECIAL_CHARS);
$Linea = filter_var($Linea, FILTER_SANITIZE_SPECIAL_CHARS);
$Fuente = filter_var($Fuente, FILTER_SANITIZE_SPECIAL_CHARS);
$Ean = filter_var($Ean, FILTER_SANITIZE_SPECIAL_CHARS);
$Iva = filter_var($Iva, FILTER_SANITIZE_SPECIAL_CHARS);
$PrecioLista = filter_var($PrecioLista, FILTER_SANITIZE_SPECIAL_CHARS);
$PvpSugerido = filter_var($PvpSugerido, FILTER_SANITIZE_SPECIAL_CHARS);
$PvpPremium = filter_var($PvpPremium, FILTER_SANITIZE_SPECIAL_CHARS);

$Query = "INSERT INTO `skil`(`id`, `codigoi`, `codigoii`, `segmento`, `material`, `descripcion`, `presentacion`, `linea`, `fuente`, `ean`, `iva`, `preciolista`, `pvpsugerido`, `pvppremium`, `cantidad`, `thumb`) VALUES ('DEFAULT','$Codigoi','$Codigoii','$Segmento','$Material','$Descripcion','$Presentacion','$Linea','$Fuente','$Ean','$Iva','$PrecioLista','$PvpSugerido','$PvpPremium','$CantidadProducto','$nombre'))";

$Result = $conexion->query($Query);

$A = $Result ? header("Location: ./skill.php") : 'No sé pudo agregar el producto correctamente';
