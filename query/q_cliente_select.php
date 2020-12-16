<?php 
include 'connections/connection_database.php';
$clientes_select=
"SELECT     
    $campos_select
FROM
    Empresa_BD.Personas
    $inner_select        
	$where_select
	$group_select";

$q_cliente_select = mysqli_query($conexion_crud,$clientes_select) or die("Error en la consulta");
?>