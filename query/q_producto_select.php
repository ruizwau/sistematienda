<?php 
include 'connections/connection_database.php';
$producto_select=
"SELECT     
    $campos_select
FROM
    Empresa_BD.Productos
    $inner_select        
	$where_select
	$group_select";

$q_producto_select = mysqli_query($conexion_crud,$producto_select) or die("Error en la consulta");
?>