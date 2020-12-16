<script type="text/javascript">


  $(document).on('click','#btnGuardarcliente',function(event){
    event.preventDefault();
      alert("boton entra");
      formFactura();
    });


  function formFactura() {
        accion = 2; //altacliente   
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
            edad:edad,tarjetadecredito:tarjetadecredito,accion:accion},
            success: function(data){  
                alert('Exito');

            }        
          });


  }

</script>