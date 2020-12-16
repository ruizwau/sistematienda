

<?php


 
	$campos_select=" idPersona, nombre, apellido,dni, fechadenacimiento,edad, Empleados.legajo ";
	$inner_select="  JOIN Empresa_BD.Empleados USING(idPersona) "; 
	$where_select=" ";
	$group_select=" ";
	include "query/q_empleado_select.php";

	switch($accion){

    case 2: //alta
  include "empleados/agregar_empleado/empleado_agregar_query.php";
    break;

       
    }
          
?>