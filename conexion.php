<?php

$conexion = new mysqli('localhost', 'root', '', 'basebosh');

if (!$conexion) {
    echo "No se pudo conectar a la base de datos correctamente";
}
