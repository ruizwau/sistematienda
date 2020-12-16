<script type="text/javascript">
	

  $(document).on('click','#btngenerarfactura',function(event){
      event.preventDefault();
      $('.facturaimp').show();
      formFactura();
    });


    $(document).on('click','#bntcancelargenerarfactura',function(event){
    
       event.preventDefault();
       $('#exampleModal').modal('hide');
    
    });


  $(document).on('click','#btncancelarimprimefactura',function(event){
      
      event.preventDefault();
      $('.formFactura').show();
      $('.btngenerarfactura').show();
      $('.btncancelargenerarfactura').show();
      $('.facturaimp').hide();
      $('.btncancelarimprimefactura').addClass('d-none');
      $('.btnimprimefactura').addClass('d-none');
 
    });

    $(document).on('click','#btnimprimefactura',function(event){
      event.preventDefault();
      printDiv();
    });

  function formFactura() {
       
        codigoorden = $("#codigoorden").val();
      
        
       $.ajax({
            url: "facturas_recibe.php",
            type: "POST",
            dataType: "html",
            data: {codigoorden:codigoorden},
            beforeSend: function(){
            
            },
            error: function(){
              $("#recibefactura").empty();        
              $("#recibefactura").html("<div align='center' class='alert alert-danger'><strong>Error</strong></div>");  
            },
            success: function(data){
                                                              
              $("#recibefactura").empty();
              $("#recibefactura").append(data);
              $('.formFactura').hide();
              $('.btngenerarfactura').hide();
              $('.btncancelargenerarfactura').hide();
              $('.btncancelarimprimefactura').removeClass('d-none');
              $('.btnimprimefactura').removeClass('d-none');
         
            }       
          });


  }




      function printDiv() 
      {

      var name=document.getElementById('recibefactura');
      var newWin = window.open('Print-Window');
      newWin.document.open();
      newWin.document.write('<style>body{width=90%;height:50%;}</style>'+'<html><body onload="window.print()">' + name.innerHTML + '</body></html>');
      newWin.document.close();
      setTimeout(function() {
      newWin.close();
      }, 10);



      }


   
</script>