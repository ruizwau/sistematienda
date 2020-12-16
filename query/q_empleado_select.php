<?php 
include 'connections/connection_database.php';
$empleados_select=
"SELECT     
    $campos_select
FROM
    Empresa_BD.Personas
    $inner_select        
	$where_select
	$group_select";

$q_empleado_select = mysqli_query($conexion_crud,$empleados_select) or die("Error en la consulta");
?>