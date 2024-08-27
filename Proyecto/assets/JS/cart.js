$(document).ready(function(){
    $('.remover').on('submit', function(event){
        event.preventDefault();  
        var form = $(this); // Guarda la referencia al formulario

        $.ajax({
            url: '../index.php?controller=catalogo&action=QuitarCarrito',  
            type: 'POST',
            data: form.serialize(),
            success: function(response){
                console.log(response); 
                var data = JSON.parse(response); 

                if (data.status === 'success') { 
                    if (data.action === 'removed') {
                        // Muestra una alerta indicando que el producto fue eliminado
                        swal({
                            title: "Producto Eliminado",
                            text: "Has eliminado: " + data.product.name,
                            icon: "success"
                        });

                        // Elimina el producto visualmente del carrito
                        form.closest('.cart-item').remove();
                    } else if (data.action === 'reduced') {
                        // Muestra una alerta indicando que la cantidad fue reducida
                        swal({
                            title: "Cantidad Reducida",
                            text: "Has reducido la cantidad de: " + data.product.name,
                            icon: "success"
                        });

                        // Actualiza la cantidad visualmente en el carrito   1
                        form.closest('.cart-item').find('.badge').text(data.product.quantity);
                    }

                    // Actualiza el contador de productos en el carrito (si es necesario)     2
                    $('#cart-count').text(data.cart_count);

                    // Si el carrito queda vacío, muestra el mensaje correspondiente        ATTE: Estudiar estos pasos
                    if (data.cart_count === 0) {
                        $('#cart').html('<div class="alert alert-warning text-center">El carrito está vacío.</div>');
                    }
                } else {
                    alert('Error al eliminar el producto. Intenta de nuevo.');
                }
            }
        });
    });
});
