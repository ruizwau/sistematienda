

<?php



        $consulta = "INSERT INTO Empresa_BD.Personas VALUES(DEFAULT,'".$nombre."', '".$apellido."','".$dni."', '".$fechadenacimiento."', '".$edad ."')";    
        $q_persona_insert = mysqli_query($conexion_crud,$consulta) or die("Error en la consulta");
        

        $consultamax = " SELECT idPersona FROM Empresa_BD.Personas ORDER BY idPersona DESC ";  
        $q_max = mysqli_query($conexion_crud,$consultamax) or die("Error en la consulta"); 
        $ro = mysqli_fetch_array($q_max);
        $highest = $ro[0]; 
        


        $consulta_empleado = "INSERT INTO Empresa_BD.Empleados VALUES('".$highest."','".$legajo."') ";  
        $q_empleado_insert = mysqli_query($conexion_crud,$consulta_empleado) or die("Error en la consulta"); 




?>