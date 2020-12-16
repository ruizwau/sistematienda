<table id="idventatabla" class="venta table-bordered table-striped table-light table-sm table-condensed " >
<thead class="text-center">
    <tr>
        <th>Numero Orden</th>
        <th>Cliente Nombre</th>
        <th>Cliente Apellido</th>
        <th>Empleado Nombre</th>
        <th>Empleado Apellido</th>
        <th>Legajo</th>
        <th>Cantidad</th>  
        <th>Producto</th>
        <th>PrecioUnidad</th>
        <th>Fecha</th>
        <th>Accion</th>

    </tr>
</thead>
<tbody>
<?php
while($rows=mysqli_fetch_array($q_venta_select )){
?>
    <tr>
      <td><?php echo $rows['codigoorden'] ?></td>
      <td><?php echo $rows['Nombre_cliente'] ?></td>
	    <td><?php echo $rows['Apellido_cliente'] ?></td>
		  <td><?php echo $rows['Nombre_empleado'] ?></td>
      <td><?php echo $rows['Apellido_empleado'] ?></td>
      <td><?php echo $rows['Legajo'] ?></td>
      <td><?php echo $rows['cantidad'] ?></td>
      <td><?php echo $rows['nombre'] ?></td>
      <td><?php echo $rows['preciounitario'] ?></td>
      <td><?php echo $rows['fechayhora'] ?></td>
      <td>
   
    <button type="button" id=" <?php echo $rows['idProducto'] ?>" class="btn btnEditar mt-2  text-white btn-warning">Editar</button>
    <button type="button" id=" <?php echo $rows['idProducto'] ?>" class="btn btnBorrar mt-2  text-white btn-warning">Borrar</button>

      </td>
    </tr>
<?php
    }
?>                                
</tbody>        
</table>                    
                
   


