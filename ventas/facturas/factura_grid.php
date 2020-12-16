

<div class="card">
  <div class="card-header">
    <h4>Factura</h4>
    <?php
        while($r=mysqli_fetch_array($q_detalle_orden)){
    ?>
          
          <ul class="list-group list-group-flush">                
            <li class="list-group-item">Nombre del Cliente: <?php echo $r['Nombre_cliente'] ?></li>
            <li class="list-group-item">Apellido del Cliente: <?php echo $r['Apellido_cliente'] ?></li>
            <li class="list-group-item">Nombre del Empleado: <?php echo $r['Nombre_empleado'] ?></li>
            <li class="list-group-item">Apellido del Empleado: <?php echo $r['Apellido_empleado'] ?></li>
            <li class="list-group-item">Legajo Empleado: <?php echo $r['Legajo'] ?></li>  
            <li class="list-group-item">Fecha: <?php echo $r['fechayhora'] ?></li>          
          </ul>    
                        
    <?php  } ?>
  </div>  
  <div class="card-body">
     <h6>Detalle</h6>
    <?php
        while($rows=mysqli_fetch_array($q_detalle_ordendelproducto)){
    ?>

      
        <ul class="list-group list-group-flush">

          <li class="list-group-item">Cantidad: <?php echo $rows['cantidad'] ?></li>
          <li class="list-group-item">Producto: <?php echo $rows['nombre'] ?></li>
          <li class="list-group-item">Precio: <?php echo $rows['preciounitario'] ?></li>
          <li class="list-group-item">Subtotal:    <?php echo $rows['SUBTOTAL'] ?></li>
        </ul>
    

     <?php  } ?>
    </div>

    <div class="card-footer">
       TOTAL---------------------<?php $row = mysqli_fetch_array($q_total);echo $total = $row[0];?>
    </div>

</div>
                          