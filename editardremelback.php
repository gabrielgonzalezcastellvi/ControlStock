<?php
 require 'conexion.php';

 $Id = $_POST['id'];
 $Cantidad = $_POST['cantidad'];
 $Codigo1 = $_POST['codigoi'];
 $Codigo2 = $_POST['codigoii'];
 $Familia = $_POST['familia'];
 $SubFamilia = $_POST['subfamilia'];
 $Descripcion = $_POST['descripcion'];
 $Ean = $_POST['ean'];
 $Iva = $_POST['iva'];
 $PrecioLista = $_POST['preciolista'];
 $PvpSugerido = $_POST['pvpsugerido'];
 $PvpPremium = $_POST['pvppremium'];

$Imagen = $_FILES['thumb']['name'];
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

        //header("Location:bosh.php");
    }
}

 $Codigo1 = filter_var($Codigo1,FILTER_SANITIZE_SPECIAL_CHARS);
 $Codigo2 = filter_var($Codigo2,FILTER_SANITIZE_SPECIAL_CHARS);
 $Familia = filter_var($Familia,FILTER_SANITIZE_SPECIAL_CHARS);
 $SubFamilia = filter_var($SubFamilia,FILTER_SANITIZE_SPECIAL_CHARS);
 $Descripcion = filter_var($Descripcion,FILTER_SANITIZE_SPECIAL_CHARS);
 $Ean = filter_var($Ean,FILTER_SANITIZE_SPECIAL_CHARS);
 $Iva = filter_var($Iva,FILTER_SANITIZE_SPECIAL_CHARS);
 $PrecioLista = filter_var($PrecioLista,FILTER_SANITIZE_SPECIAL_CHARS);
 $PvpSugerido = filter_var($PvpSugerido,FILTER_SANITIZE_SPECIAL_CHARS);
 $PvpPremium = filter_var($PvpPremium,FILTER_SANITIZE_SPECIAL_CHARS);

 if(!empty($Imagen)){
$Query = "UPDATE `dremel` SET `id`='$Id',`codigoi`='$Codigo1',`codigoii`='$Codigo2',`familia`='$Familia',`subfamilia`='$SubFamilia',`descripcion`='$Descripcion',`ean`='$Ean',`iva`='$Iva',`preciosiniva`='$PrecioLista',`pvpsugerido`='$PvpSugerido',`pvppremium`='$PvpPremium',`cantidad`='$Cantidad',`thumb`='$Imagen' WHERE id = '$Id'";}
else{
   $Query = "UPDATE `dremel` SET `id`='$Id',`codigoi`='$Codigo1',`codigoii`='$Codigo2',`familia`='$Familia',`subfamilia`='$SubFamilia',`descripcion`='$Descripcion',`ean`='$Ean',`iva`='$Iva',`preciosiniva`='$PrecioLista',`pvpsugerido`='$PvpSugerido',`pvppremium`='$PvpPremium',`cantidad`='$Cantidad' WHERE id = '$Id'";
}


$Result = mysqli_query($conexion,$Query);

$A = $Result ? header("Location: ./dremelAll.php") : 'no se pudo editar la información';
