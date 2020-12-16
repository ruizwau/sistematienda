

<?php

include 'connections/connection_database.php';

             //SELECT
            $campos_select=" o.codigoorden,
            o.cliente,
            o.vendedor,
            c.Nombre_cliente ,
            c.Apellido_cliente,
            e.Nombre_empleado,
            e.Apellido_empleado,
            e.Legajo,
            odp.cantidad,
            p.nombre,
            p.preciounitario,
            o.fechayhora";
            $inner_select=" INNER JOIN 
            ( SELECT idPersona,nombre AS 'Nombre_cliente', apellido AS 'Apellido_cliente' FROM Personas INNER JOIN Clientes USING(idPersona) ) AS c ON o.cliente=c.idPersona 
                           INNER JOIN  ( SELECT idPersona,nombre AS 'Nombre_empleado', apellido AS 'Apellido_empleado', legajo AS 'Legajo' FROM Personas INNER JOIN Empleados USING(idPersona)) AS e ON o.vendedor=e.idPersona
                           INNER JOIN  OrdenDelProducto AS odp ON o.codigoorden= odp.codigoorden
                           INNER JOIN  Productos AS p ON p.idProducto=odp.idProducto  "; 
            $where_select=" ";
            $group_select=" ";
            include "query/q_venta_select.php";




switch($accion){

    case 2: //baja

    break;
    case 3: //modificacion

    break;
       
    }








?>