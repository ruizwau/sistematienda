<?php

$firstName = substr($cliente, 0, strpos($cliente, ' '));
$lastName = substr($cliente, strlen($firstName));
$lastName = str_replace(' ', '', $lastName);
$firstNamee = substr($empleado, 0, strpos($empleado, ' '));
$lastNamee = substr($empleado, strlen($firstNamee));
$lastNamee = str_replace(' ', '', $lastNamee);
$fechayhora = date('Y-m-d H:i:s');

//consulta id cliente

include 'connections/connection_database.php';
$consulta_c=" SELECT * FROM Personas AS p INNER JOIN Clientes AS c USING(idPersona) WHERE p.nombre LIKE '".$firstName."' AND 
p.apellido LIKE '".$lastName."' ";
$q_clientes = mysqli_query($conexion_crud,$consulta_c) or die("Error en la consulta"); 
$c=mysqli_fetch_array($q_clientes);
$idc=$c['idPersona'];

//consulta id empleado

$consulta_e=" SELECT * FROM Personas AS p INNER JOIN Empleados AS e USING(idPersona) WHERE p.nombre LIKE '".$firstNamee."' AND 
p.apellido LIKE '".$lastNamee."' ";
$q_empleados = mysqli_query($conexion_crud,$consulta_e) or die("Error en la consulta");   
$e=mysqli_fetch_array($q_empleados);
$ide=$e['idPersona'];

//consulta idproducto

$consulta_p=" SELECT * FROM Productos AS pr  WHERE pr.nombre LIKE '".$producto."' ";
$q_productos = mysqli_query($conexion_crud,$consulta_p) or die("Error en la consulta");  
$p=mysqli_fetch_array($q_productos);
$idpr=$p['idProducto'];


//inserts necesarios

$agregar_orden="INSERT INTO `Orden` (`cliente`,`vendedor`,`fechayhora`) VALUES ('".$idc."','".$ide."','".$fechayhora."') ";


$q_agregar_orden = mysqli_query($conexion_crud,$agregar_orden) or die("Error en la consulta");

$consultamax = " SELECT * FROM Empresa_BD.Orden ORDER BY codigoorden DESC ";  

$q_max = mysqli_query($conexion_crud,$consultamax) or die("Error en la consulta"); 
$ro = mysqli_fetch_array($q_max);
$idco = $ro[0];   


$agregar_ordenproducto="INSERT INTO `OrdenDelProducto` (`idProducto`,`codigoorden`,`cantidad`) VALUES  ('".$idpr."','".$idco."','".$cantidad."') ";


$q_agregar_orden_producto = mysqli_query($conexion_crud,$agregar_ordenproducto) or die("Error en la consulta");


  
?>