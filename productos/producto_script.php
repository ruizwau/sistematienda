<script type="text/javascript">
	
  $(document).ready(function() {
      cargarProductos();
      
  });


    function cargarProductos(){  
      
      var accion=1;//lectura
    
    $.ajax({
      type: "POST",
      url: "productos_recibe.php",
      data:{accion},
      dataType: "html",
      beforeSend: function(){
      
      },
      error: function(){
        $("#tablaproductos").empty();        
        $("#tablaproductos").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
      },
      success: function(data){                                                    
        $("#tablaproductos").empty();
        $("#tablaproductos").append(data);
   
      }
    });
  }


	
</script>