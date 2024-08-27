$(document).ready(function(){
    $('.productForm').on('submit', function(event){
      event.preventDefault();  // evita que se envie el foprmulario y recargue la pag
      
      $.ajax({
        url: '../index.php?controller=catalogo&action=AñadirCarrito', 
        type: 'POST',  
        data: $(this).serialize(),  
        success: function(response){
          console.log(response);
          // Parsear la respuesta JSON
          var data = JSON.parse(response);

          $('#cuenta-carrito').text(data.cart_count);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('Error en la solicitud AJAX:', textStatus, errorThrown);
        }
      });
    });
  });

  