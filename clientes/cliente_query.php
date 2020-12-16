

<?php

include 'connections/connection_database.php';
 
	$campos_select=" idPersona, nombre, apellido,dni, fechadenacimiento,edad, Clientes.tarjetadecredito ";
	$inner_select="  JOIN Empresa_BD.Clientes USING(idPersona) "; 
	$where_select=" ";
	$group_select=" ";
	include "query/q_cliente_select.php";

	switch($accion){

    case 2: //alta
       include "clientes/agregar_cliente/cliente_agregar_query.php";
    break;
    case 3: //modificacion

    break;
       
    }
          




?>