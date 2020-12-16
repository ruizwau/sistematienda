
<form id="formProductos " class="col-lg-6 producto">  
   
   <label >Cliente:</label>
   <select class="form-control removeLater "  id="cliente" name="cliente">
      <?php while($c=mysqli_fetch_array($q_clientes )){ ?>
          <option  class="opcion">
             <?php echo $c['Nombre_cliente'].' '.$c['Apellido_cliente'] ?>    
         </option>
      <?php } ?>               
    </select> 

   <label >Empleado:</label>
   <select class="form-control removeLater" id="empleado" name="empleado">
      <?php while($e=mysqli_fetch_array($q_empleados )){ ?>
          <option  class="opcion">
             <?php echo $e['Nombre_empleado'].' '.$e['Apellido_empleado'] ?>    
         </option>
      <?php } ?>               
    </select> 

   <label >Producto:</label>
   <select   class="form-control removeLater " id="producto" name="producto">
      <?php while($p=mysqli_fetch_array($q_productos )){ ?>
          <option  class="opcion">
             <?php echo $p['nombre'] ?>    
         </option>
      <?php } ?>               
    </select> 
   <label> Cantidad: <input type="number" class="form-control removeLater" id="cantidad" min="1" step="1" data-bind="value:replyNumber" name="cantidad"></label> 

   <label> Fecha y hora: <input type="datetime-local" class="form-control removeLater" id="fechayhora" name="fechayhora"></label>                                                      
</form>                     