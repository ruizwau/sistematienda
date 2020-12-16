<script type="text/javascript">
	

  $(document).ready(function() {
      cargarVentas();

  });


    function cargarVentas(){  
      
      var accion=1;//lectura
    
    $.ajax({
      type: "POST",
      url: "ventas_recibe.php",
      data:{accion},
      dataType: "html",
      beforeSend: function(){
      
      },
      error: function(){
        $("#tablita").empty();        
        $("#tablita").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
      },
      success: function(data){                                                    
        $("#tablita").empty();
        $("#tablita").append(data);
   
      }
    });
  }
 
</script>