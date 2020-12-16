<script type="text/javascript">

      $(document).on('click','.btnNuevo',function(event){
       event.preventDefault();
      formProductos();
    });

  function formProductos() {
   
        accion = 2; //altacliente    
        nombre = $("#nombre").val();
        marco = $("#marco").val();
        fechadevencimiento = $("#fechadevencimiento").val();
        preciounitario = $("#preciounitario").val(); 
        proveedor=$("#proveedor").val();

        
        
        $.ajax({
            url: "productos_recibe.php",
            type: "POST",
            dataType: "html",
            data: {nombre:nombre,
                marco:marco,
                fechadevencimiento:fechadevencimiento,
                preciounitario:preciounitario,accion:accion,proveedor:proveedor},
            success: function(data){  
                // falta codigo
                alert('Exito');  

            }        
          });


  }







	
         


	
</script>