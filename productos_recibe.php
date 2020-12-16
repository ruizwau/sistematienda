<?php 

include "productos/producto_variables.php";
include "productos/producto_query.php";
include "productos/producto_grid.php";



?>

<script type="text/javascript">
	
	  $(document).ready(function() {
      $('table.producto').DataTable();
      
  });
</script>