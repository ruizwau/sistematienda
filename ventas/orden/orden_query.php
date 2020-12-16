<?php

include 'connections/connection_database.php';

$consulta_clientes=" SELECT idPersona,nombre AS 'Nombre_cliente', apellido AS 'Apellido_cliente' FROM Personas INNER JOIN Clientes USING(idPersona)";
$q_clientes = mysqli_query($conexion_crud,$consulta_clientes) or die("Error en la consulta");

$consulta_empleados="SELECT idPersona,nombre AS 'Nombre_empleado', apellido AS 'Apellido_empleado', legajo AS 'Legajo' FROM Personas INNER JOIN Empleados USING(idPersona)";
$q_empleados = mysqli_query($conexion_crud,$consulta_empleados) or die("Error en la consulta");
$consulta_productos=" SELECT * FROM Productos";
$q_productos = mysqli_query($conexion_crud,$consulta_productos) or die("Error en la consulta");

?>