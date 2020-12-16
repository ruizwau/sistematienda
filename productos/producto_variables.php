<?php  

include 'connections/connection_database.php';

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$marca = (isset($_POST['marco'])) ? $_POST['marco'] : '';
$fechavencimiento = (isset($_POST['fechadevencimiento'])) ?$_POST['fechadevencimiento'] : '';
$preciounitario = (isset($_POST['preciounitario'])) ? $_POST['preciounitario'] : '';
$proveedor = (isset($_POST['proveedor'])) ? $_POST['proveedor'] : '';

?>