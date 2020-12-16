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
            <div class="col-lg-6">
                <button type="button " id="btnFactura" class="btn  mt-2 mb-2 ml-2 text-white btn-warning" data-toggle="modal" data-target="#exampleModal">Generar factura</button>
                <button type="button" class="btn btn-md mt-2 mb-2 ml-2 text-white btn-warning" data-toggle="modal" data-target="#ordenModal">Generar Orden de Compra</button>
            </div>
          </div>
      </div> 

      <div class="container">
         <div class="row">
          <div class="col-lg-12 mb-4  table-responsive">  
              <div id="tablita"></div>
           </div>
         </div> 
      </div>

      <script src="jquery/jquery-3.3.1.min.js"></script>
      <script src="popper/popper.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>     
      <?php include "ventas/venta_script.php" ?>
      <?php include "ventas/modal_factura.php" ?>
      <?php include "ventas/modal_orden.php" ?>
      <?php include "ventas/facturas/factura_script.php" ?>
      <?php include "ventas/orden/orden_script.php" ?>
  </body>
 
</html>  