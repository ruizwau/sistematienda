
<?php

 $campos_select=" idProducto, nombre, marco, fechadevencimiento,preciounitario, imagen";
 $inner_select=" "; 
 $where_select=" ";
 $group_select=" ";
 include "query/q_producto_select.php";


switch($accion){
    case 2: //alta producto
         include "productos/productos_agregar/producto_agregar_query.php";
        break;
      
   }


?>