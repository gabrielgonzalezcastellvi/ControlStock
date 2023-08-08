<?php
require 'conexion.php';

$Id = $_GET['id'];

$Query = "DELETE FROM bosh WHERE id = '$Id'";

$Result = mysqli_query($conexion, $Query);

$A = $Result ? Header("Location:./boshAll.php") : 'No se pudo eliminar el producto seleccionado';
