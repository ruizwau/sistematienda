

<?php


$consulta = "INSERT INTO Empresa_BD.Productos VALUES(DEFAULT,'".$nombre."', '".$marca."', '".$fechavencimiento."', '".$preciounitario ."','productos_imagen/descarga.jpg') ";	
echo $consulta;
$q_producto_insert = mysqli_query($conexion_crud,$consulta) or die("Error en la consulta");



$consultaultimo = " SELECT idProducto FROM Empresa_BD.Productos ORDER BY idProducto DESC ";  
$q_ult = mysqli_query($conexion_crud,$consultaultimo) or die("Error en la consulta"); 
$row = mysqli_fetch_array($q_ult);
$ultimoproducto = $row[0]; 

$idP = "SELECT * FROM Empresa_BD.Proveedores WHERE Nombre='".$proveedor."'";	
$q_proveed = mysqli_query($conexion_crud,$idP) or die("Error en la consulta"); 
$r = mysqli_fetch_array($q_proveed);
$idproveedor = $r[0];

$consulta_asociar_prodyprov="INSERT INTO Empresa_BD.Provee VALUES (

'".$ultimoproducto."',
'".$idproveedor."')";

$q_proveedor_insert = mysqli_query($conexion_crud,$consulta_asociar_prodyprov) or die("Error en la consulta");		


?>