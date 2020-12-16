<?php 
include 'connections/connection_database.php';
$venta_select=
"SELECT     
    $campos_select
FROM
    Empresa_BD.Orden AS o
    $inner_select        
	$where_select
	$group_select";

$q_venta_select = mysqli_query($conexion_crud,$venta_select) or die("Error en la consulta");
?>