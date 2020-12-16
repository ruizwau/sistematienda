  <?php
  include 'connections/connection_database.php';
    $proveedor = " SELECT * FROM Proveedores ";   
    $q_proveedor_select = mysqli_query($conexion_crud,$proveedor) or die("Error en la consulta"); 
  ?>          

    <div class="container">
        <div class="row">
                <div class="col-lg-12"> 

            <form id="formProductos" class="col-lg-6 mt-2 mb-2 bg-warning">    
              
                 
                    <label>Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                
             
                    <label>Marca:</label>
                    <input type="text" class="form-control" id="marco" name="marco">
               
                  
                    <label>Vencimiento:</label>
                    <input type="date" class="form-control" id="fechadevencimiento" name="fechadevencimiento">
                 

                  
                    <label >PrecioUnitario:</label>
                    <input type="text" class="form-control" id="preciounitario" name="preciounitario">

                      <label >Proveedor:</label>
                      <select class="form-control" id="proveedor" name="proveedor">
                    <?php
                        while($rows=mysqli_fetch_array($q_proveedor_select )){
                    ?>
                       <option  class="opcion">
                           
                           <?php echo $rows['Nombre'] ?>
                               
                       </option>
 

                    <?php
                            }
                        ?>

                        
                      </select>                        
            
                    <button  type="button" class="btnNuevo btn mt-2 mb-2 text-white btn-secondary" data-toggle="modal">Agregar Producto</button>

                    <button id="btnNuevo" type="button" class="btn mt-2 mb-2 text-white btn-secondary" data-toggle="modal">Agregar Proveedor</button>
               
            </form>                     
                    
                </div>
        </div>  
    </div>        

