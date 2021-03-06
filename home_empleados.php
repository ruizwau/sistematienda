<!DOCTYPE html>
<html>
  <head>
      <?php include "genericos/head.php" ?>
      <?php include "genericos/Style.php" ?>
  </head>

  <body style="background-image: url(productos_imagen/backg.jpg) ">
    
    <?php include "genericos/navbar.php" ?>
    <div class="container">
        <div class="row">
          <div class="col-lg-12">        
              <div class=" table-responsive mt-2"> 
                  <div id="tablaempleado"></div>
              </div>  
           </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php include "empleados/agregar_empleado/empleado_agregar_grid.php" ?>  
           </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>       
    <?php include "empleados/empleado_script.php" ?>
    <?php include "empleados/agregar_empleado/empleado_agregar_script.php" ?>
  </body>
 
</html>  