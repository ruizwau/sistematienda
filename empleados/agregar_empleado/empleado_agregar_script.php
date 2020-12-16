<script type="text/javascript">


  $(document).on('click','#btnGuardarempleado',function(event){

      alert("boton entra");
      formEmpleado();

    });


  function formEmpleado(){
      alert("boton entra");
        accion = 2; //altacliente   
        nombre = $("#nombre").val();
        apellido = $("#apellido").val();
        dni = $("#dni").val();
        fechadenacimiento = $("#fechadenacimiento").val();
        edad = $("#edad").val();
        legajo=$("#legajo").val();
          alert(legajo);
        $.ajax({
            url: "empleados_recibe.php",
            type: "POST",
            dataType: "html",
            data: {nombre:nombre,
            apellido:apellido,dni:dni,
            fechadenacimiento:fechadenacimiento,
            edad:edad,legajo:legajo,accion:accion},
            success: function(data){  
                alert('Exito');

            }        
          });


  }

</script>