
<?php
// first thing is to start session 
session_start();
// now to check if variable is true

if(!$_SESSION['anything'])
{
    header('location:userlogin.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
      <?php include "genericos/head.php" ?>
      <?php include "genericos/Style.php" ?>
  </head>

  <body style="background-image: url(productos_imagen/backg.jpg) ">
    

    <?php include "genericos/navbar.php" ?>
    <div class="container bg-light mt-4 mb-4"  >
      <div class="row" >
        <div class="col-lg-12 mt-4 mb-4 table-responsive ">  
          <div id="tablaproductos"></div>
        </div>               
      </div> 
    </div>

    <div class="container">
      <div class="row">
          <div class="col-lg-12">  
            <?php include "productos/productos_agregar/producto_agregar_grid.php"; ?> 
          </div>                
      </div> 
    </div>
    
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <?php include "productos/producto_script.php"; ?>
    <?php include "productos/productos_agregar/producto_agregar_script.php"; ?>       
  </body>
 
</html> 

