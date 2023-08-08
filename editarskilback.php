<?php
 require 'conexion.php';

 $Id = $_POST['id'];
 $Cantidad = $_POST['cantidad'];
 $Codigo1 = $_POST['codigoi'];
 $Codigo2 = $_POST['codigoii'];
 $Segmento = $_POST['segmento'];
 $Material = $_POST['material'];
 $Descripcion = $_POST['descripcion'];
 $Presentacion = $_POST['presentacion'];
 $Linea = $_POST['linea'];
 $Fuente = $_POST['fuente'];
 $Ean = $_POST['ean'];
 $Iva = $_POST['iva'];
 $PrecioLista = $_POST['preciolista'];
 $PvpSugerido = $_POST['pvpsugerido'];
 $PvpPremium = $_POST['pvppremium'];

echo $Imagen = $_FILES['thumb']['name'];
$guardarImagen = $_FILES['thumb']['tmp_name'];

if (!file_exists('./images/')) {
    mkdir('images', 0777, true);
    if (file_exists('images')) {
        if (move_uploaded_file($guardarImagen, './images/' . $Imagen)) {
            echo "Subido!";
        } else {
            echo "Intenta subir tu imagen más tarde. Si no es posible, por favor reporta este problema";
        }
    }
} else {
    if (move_uploaded_file($guardarImagen, './images/' . $Imagen)) {
        header("Location:skill.php");
    } elseif (empty($guardarImagen && $Imagen)) {
        echo "No se subió la imagen";
    }
}

 $Codigo1 = filter_var($Codigo1,FILTER_SANITIZE_SPECIAL_CHARS);
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

if(!empty($Imagen)){
 echo $Query = "UPDATE `skil` SET `codigoi`='$Codigo1',`codigoii`='$Codigo2',`segmento`='$Segmento',`material`='$Material',`descripcion`='$Descripcion',`presentacion`='$Presentacion',`linea`='$Linea',`fuente`='$Fuente',`ean`='$Ean',`iva`='$Iva',`preciolista`='$PrecioLista',`pvpsugerido`='$PvpSugerido',`pvppremium`='$PvpPremium',`cantidad` = '$Cantidad',`thumb`='$Imagen' WHERE id = '$Id'";
}else{
    echo $Query = "UPDATE `skil` SET `codigoi`='$Codigo1',`codigoii`='$Codigo2',`segmento`='$Segmento',`material`='$Material',`descripcion`='$Descripcion',`presentacion`='$Presentacion',`linea`='$Linea',`fuente`='$Fuente',`ean`='$Ean',`iva`='$Iva',`preciolista`='$PrecioLista',`pvpsugerido`='$PvpSugerido',`pvppremium`='$PvpPremium',`cantidad` = '$Cantidad' WHERE id = '$Id'";
 }

$Result = mysqli_query($conexion,$Query);


$A = $Result ? header("Location: ./masdetallesskil.php?id=$Id") : 'no se pudo editar la información';
