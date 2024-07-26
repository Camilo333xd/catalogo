$(document).ready(function(){
    $('.productForm').on('submit', function(event){
      event.preventDefault();  // Evitar el envío normal del formulario y la recarga de la página
      
      $.ajax({
        url: 'add_to_cart.php',  // La URL del script PHP que procesa los datos
        type: 'POST',  // El método de la solicitud
        data: $(this).serialize(),  // Serializar los datos del formulario
        success: function(response){
          console.log(response);
          // Parsear la respuesta JSON
          var data = JSON.parse(response);
          // Actualizar el contador del carrito con la respuesta del servidor
          $('#cuenta-carrito').text(data.cart_count);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('Error en la solicitud AJAX:', textStatus, errorThrown);
        }
      });
    });
  });