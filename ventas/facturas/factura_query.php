

<?php

include 'connections/connection_database.php';

$consulta_detalle_orden=" SELECT  o.cliente, o.vendedor,c.Nombre_cliente,o.fechayhora, c.Apellido_cliente,e.Nombre_empleado,e.Apellido_empleado,e.Legajo
     FROM Orden AS o
     INNER JOIN ( SELECT idPersona,nombre AS 'Nombre_cliente', apellido AS 'Apellido_cliente' FROM Personas INNER JOIN Clientes USING(idPersona) ) AS c ON o.cliente=c.idPersona 
     INNER JOIN  ( SELECT idPersona,nombre AS 'Nombre_empleado', apellido AS 'Apellido_empleado', legajo AS 'Legajo' FROM Personas INNER JOIN Empleados USING(idPersona)) AS e ON o.vendedor=e.idPersona
     WHERE o.codigoorden='".$codigoorden."'";

     $q_detalle_orden = mysqli_query($conexion_crud,$consulta_detalle_orden) or die("Error en la consulta");


     $consulta_detalle_ordendelproducto=" SELECT 
            odp.cantidad,p.nombre,p.preciounitario,odp.fechayhora,
            (odp.cantidad*p.preciounitario) AS SUBTOTAL
     FROM   OrdenDelProducto AS odp 
     INNER JOIN  Productos AS p ON p.idProducto=odp.idProducto
     WHERE odp.codigoorden='".$codigoorden."'";

     $q_detalle_ordendelproducto = mysqli_query($conexion_crud,$consulta_detalle_ordendelproducto) or die("Error en la consulta");
     
     $consulta_total="SELECT SUM(odp.cantidad*p.preciounitario) AS TOTAL
     FROM Orden AS o
     INNER JOIN ( SELECT idPersona,nombre AS 'Nombre_cliente', apellido AS 'Apellido_cliente' FROM Personas INNER JOIN Clientes USING(idPersona) ) AS c ON o.cliente=c.idPersona 
     INNER JOIN  ( SELECT idPersona,nombre AS 'Nombre_empleado', apellido AS 'Apellido_empleado', legajo AS 'Legajo' FROM Personas INNER JOIN Empleados USING(idPersona)) AS e ON o.vendedor=e.idPersona
     INNER JOIN  OrdenDelProducto AS odp ON o.codigoorden= odp.codigoorden
     INNER JOIN  Productos AS p ON p.idProducto=odp.idProducto
     WHERE o.codigoorden='".$codigoorden."'" ;

     $q_total = mysqli_query($conexion_crud,$consulta_total) or die("Error en la consulta");










?>