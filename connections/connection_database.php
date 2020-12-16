<?php


$conexion_crud = mysqli_connect("localhost", "root", "", "Empresa_BD");

echo mysqli_connect_error();

mysqli_set_charset( $conexion_crud, 'utf8');


if (isset($conexion_crud)) {
}

?>