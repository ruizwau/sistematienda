<?php

include "ventas/orden/orden_variables.php";


switch ($accion) {

  case 2:
        include "ventas/orden/orden_nueva/orden_nueva_query.php";
        include "ventas/orden/orden_nueva/orden_nueva_grid.php";
        
    break;

 
  default:
  		include "ventas/orden/orden_query.php";
		include "ventas/orden/orden_grid.php";
    break;
}

?>