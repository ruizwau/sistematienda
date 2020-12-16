<script type="text/javascript">

  $(document).ready(function() {
      cargarClientes();

  });	   
    


   function cargarClientes(){  
      
    var accion=1;//lectura
    
    $.ajax({
      type: "POST",
      url: "clientes_recibe.php",
      data:{accion},
      dataType: "html",
      beforeSend: function(){
      
      },
      error: function(){
        $("#tablaclientes").empty();        
        $("#tablaclientes").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
      },
      success: function(data){                                                    
        $("#tablaclientes").empty();
        $("#tablaclientes").append(data);
   
      }
    });
  }

/*     $("#btnGuardarcliente").click(function(){
        $("#formClientes").submit();       
         //alta
        });       

        $("#formClientes").submit(function(e){
        opcion = 1;
             
        nombre = $("#nombre").val();
        apellido = $("#apellido").val();
        dni = $("#dni").val();
        fechadenacimiento = $("#fechadenacimiento").val();
        edad = $("#edad").val();
        tarjetadecredito=$("#tarjetadecredito").val();
        
        $.ajax({
            url: "clientes_recibe.php",
            type: "POST",
            dataType: "html",
            data: {nombre:nombre,
            apellido:apellido,dni:dni,
            fechadenacimiento:fechadenacimiento,
            edad:edad,tarjetadecredito:tarjetadecredito,opcion:opcion},
            success: function(data){  
                alert('Exito');

            }        
          });
      
        });*/

</script>