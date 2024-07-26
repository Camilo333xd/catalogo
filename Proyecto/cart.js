// cart.js
$(document).ready(function() {
    // Manejar el evento de eliminación de producto
    $('#cart').on('submit', 'form', function(event) {
      event.preventDefault(); // Prevenir la acción por defecto del formulario
  
      var form = $(this); // Referencia al formulario actual
      var url = form.attr('action'); // Obtener la URL del formulario
      var data = form.serialize(); // Serializar los datos del formulario
  
      $.ajax({
        url: url, // La URL del script PHP que procesa los datos
        type: 'POST', // El método de la solicitud
        data: data, // Los datos del formulario
        success: function(response) {
          // Actualizar el contenido del carrito
          $('#cart').html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('Error en la solicitud AJAX:', textStatus, errorThrown);
        }
      });
    });
  });
