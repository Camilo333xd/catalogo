$(document).ready(function(){
    // Evita que el formulario se recargue
    $('.remover').on('submit', function(event){
        event.preventDefault();  

        $.ajax({
            url: '../index.php?controller=catalogo&action=QuitarCarrito',  
            type: 'POST',                    
            data: $(this).serialize(),       
            success: function(response){
                // Procesa la respuesta JSON
                console.log(response); // Verifica la respuesta del servidor en la consola.

                // Parsear la respuesta JSON
                var data = JSON.parse(response); // Convierte la respuesta en un objeto.
            
                if (data.status === 'success') { // Verifica si la eliminación fue exitosa
                    // Actualiza la cantidad de productos en el carrito
                    // $('#cuenta-carrito').text(data.cart_count);
            
                    // Opcional: Puedes quitar el elemento del carrito visualmente
                    // Esto asume que tienes un elemento con un identificador único para el producto.
                    // Aquí debes seleccionar el contenedor del producto eliminado y quitarlo.
                    $(this).closest('.cart-item').remove(); // Elimina el elemento del DOM
            
                } else {
                    alert('Error al eliminar el producto. Intenta de nuevo.');
                }
            },
        });
    });
});
