<?php

include 'connections/connection_database.php';

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$dni = (isset($_POST['dni'])) ? $_POST['dni'] : '';
$fechadenacimiento = (isset($_POST['fechadenacimiento'])) ?$_POST['fechadenacimiento'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$tarjetadecredito = (isset($_POST['tarjetadecredito'])) ? $_POST['tarjetadecredito'] : '';

?>