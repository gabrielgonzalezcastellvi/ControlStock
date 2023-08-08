<?php
require 'conexion.php';

$Id = $_GET['id'];

$Query = "DELETE FROM skil WHERE id = '$Id'";

$Result = mysqli_query($conexion, $Query);

$A = $Result ? Header("Location:./skilAll.php") : 'No se pudo eliminar el producto seleccionado';
