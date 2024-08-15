$(document).ready(function() {
    // Manejar el evento de eliminación de producto
    $('#cart').on('submit', 'form', function(event) {
      event.preventDefault(); // Prevenir la acción por defecto del formulario
  
      var form = $(this); // Referencia al formulario actual
      var url = form.attr('action'); 
      var data = form.serialize(); 
  
      $.ajax({
        url: url ,
        type: 'POST', 
        data: data, 
        success: function(response) {
          $('#cart').html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('Error en la solicitud AJAX:', textStatus, errorThrown);
        }
      });
    });
  });
