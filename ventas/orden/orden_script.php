<script type="text/javascript">
  

  $(document).ready(function() {
      OrdenForm();
  });


    function OrdenForm(){  

    $.ajax({
      type: "GET",
      url: "ordenes_recibe.php",    
      dataType: "html",
      beforeSend: function(){
      
      },
      error: function(){
        $("#ordenformulario").empty();        
        $("#ordenformulario").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
      },
      success: function(data){                                                    
        $("#ordenformulario").empty();
        $("#ordenformulario").append(data);
   
      }
    });
  }
 
  $(document).on('click','#btngenerarorden',function(event){
      event.preventDefault();
      $(".mensajeorden").removeClass('invisible');
      formOrdenNueva();
    });


    $(document).on('click','#bntcancelarorden',function(event){
    
       event.preventDefault();
       
        $(".mensajeorden").addClass('invisible');
      $(".removeLater").val('');
   
    });


  function formOrdenNueva() {
    
        var empleado = $("#empleado").val();
        var cliente = $("#cliente").val();
        var producto = $("#producto").val();
        var cantidad = $("#cantidad").val();
        var fechayhora = $("#fechayhora").val();
        var accion=2;//alta
        
       $.ajax({
            url: "ordenes_recibe.php",
            type: "POST",
            dataType: "html",
            data: {empleado:empleado,cliente:cliente,producto:producto,cantidad:cantidad,fechayhora:fechayhora,accion:accion},
            beforeSend: function(){
            
            },
            error: function(){
              $("#recibefactura").empty();        
              $("#recibefactura").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
            },
            success: function(data){
                                                              
              $("#mensajeorden").empty();
              $("#mensajeorden").append(data);
              
            }       
          });


  }



</script>