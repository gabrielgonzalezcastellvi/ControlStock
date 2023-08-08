<?php
require 'conexion.php';
$Id = $_GET['id'];

$Query = "DELETE FROM ventasbosch WHERE id = '$Id'";

$Result = mysqli_query($conexion,$Query);

$A = $Result ? header("Location: ./ventasBosch.php") : 'No se pudo eliminar correctamente';