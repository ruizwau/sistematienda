<script type="text/javascript">

  $(document).ready(function() {
      cargarEmpleados();

  });	   
    


   function cargarEmpleados(){  
      
    var accion=1;//lectura
    
    $.ajax({
      type: "POST",
      url: "empleados_recibe.php",
      data:{accion},
      dataType: "html",
      beforeSend: function(){
      
      },
      error: function(){
        $("#tablaempleado").empty();        
        $("#tablaempleado").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
      },
      success: function(data){                                                    
        $("#tablaempleado").empty();
        $("#tablaempleado").append(data);
   
      }
    });
  }



</script>