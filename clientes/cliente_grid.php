<table id="idclientetabla" class=" table table-bordered table-striped table-light table-sm table-condensed" style="width:100%">
<thead class="text-center">
    <tr>
       
        <th>Nombre</th>
        <th>Apellido</th>                                
        <th>Dni</th>
        <th>FechadeNacimiento</th>  
        <th>edad</th>
       <th>Tarjeta de Credito</th> 
        <th>Accion</th>
    </tr>
</thead>
<tbody>
<?php
while($rows=mysqli_fetch_array($q_cliente_select)){
?>
    <tr>
      <td><?php echo $rows['nombre'] ?></td>
<td><?php echo $rows['apellido'] ?></td>
<td><?php echo $rows['dni'] ?></td>
      <td><?php echo $rows['fechadenacimiento'] ?></td>
      <td><?php echo $rows['edad'] ?></td>
       <td><?php echo $rows['tarjetadecredito'] ?></td> 
      <td>
<button type="button" id=" <?php echo $rows['idPersona'] ?>" class="btn btnEditar text-white btn-warning">Editar</button>
<button type="button" id=" <?php echo $rows['idPersona'] ?>" class="btn btnBorrar text-white btn-warning">Borrar</button>
      </td>
    </tr>
<?php
    }
?>                                
</tbody>        
</table>                    

 

