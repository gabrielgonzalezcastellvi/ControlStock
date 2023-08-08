<?php
require 'conexion.php';
$Id = $_GET['id'];

$Query = "DELETE FROM ventasdremel WHERE id = '$Id'";

$Result = mysqli_query($conexion,$Query);

$A = $Result ? header("Location: ./ventasDremel.php") : 'No se pudo eliminar correctamente';