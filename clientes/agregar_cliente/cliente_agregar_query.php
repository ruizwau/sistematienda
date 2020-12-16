

<?php



        $consulta = "INSERT INTO Empresa_BD.Personas VALUES(DEFAULT,'".$nombre."', '".$apellido."','".$dni."', '".$fechadenacimiento."', '".$edad ."')";    
        $q_persona_insert = mysqli_query($conexion_crud,$consulta) or die("Error en la consulta");
        

        $consultamaximo = " SELECT idPersona FROM Empresa_BD.Personas ORDER BY idPersona DESC ";  
        $q_max = mysqli_query($conexion_crud,$consultamaximo) or die("Error en la consulta"); 
        $row = mysqli_fetch_array($q_max);
        $highest_id = $row[0]; 
        


        $consulta_cliente = "INSERT INTO Empresa_BD.Clientes VALUES('".$highest_id."','".$tarjetadecredito."') ";  
        $q_cliente_insert = mysqli_query($conexion_crud,$consulta_cliente) or die("Error en la consulta"); 




?>