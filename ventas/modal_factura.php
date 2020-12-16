

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning" >
        <h5 class="modal-title  text-white" id="exampleModalLabel">Factura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="formFactura" class="col-lg-6 formFactura factura">  
             <label> Numero de orden: <input type="text" class="form-control" id="codigoorden" name="codigoorden"></label>  
          </form>
     
      <div class="facturaimp" id="recibefactura">
            
      </div>

      </div>
      <div class="mt-2 mb-4 ml-4">
        <button type="button" id="bntcancelargenerarfactura" class="btn    btncancelargenerarfactura btn-secondary" >Cancelar</button>
        <button type="button" id="btngenerarfactura" class="btn  btngenerarfactura text-white btn-warning">Generar</button>
        <button type="button" id="btncancelarimprimefactura" class="btn btncancelarimprimefactura d-none btn-secondary" >Cancelar Impresion</button>
        <button type="button" id="btnimprimefactura" class="btn d-none btnimprimefactura text-white btn-warning">Imprimir</button>
      </div>
    </div>
  </div>
</div>