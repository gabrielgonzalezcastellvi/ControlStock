<?php
require 'conexion.php';
$Id = $_GET['id'];

$Query = "DELETE FROM ventasskil WHERE id = '$Id'";

$Result = mysqli_query($conexion,$Query);

$A = $Result ? header("Location: ./ventasSkil.php") : 'No se pudo eliminar correctamente';