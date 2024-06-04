document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartContainer = document.getElementById('cart');

    const updateCart = () => {
        cartContainer.innerHTML = '';
        if (cart.length === 0) {
            cartContainer.innerHTML = '<p>El carrito está vacío.</p>';
        } else {
            cart.forEach((product, index) => {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <div class="product-info">
                        <img src="${product.image}" alt="${product.name}">
                        <div>
                            <h2>${product.name}</h2>
                            <p>${product.description}</p>
                            <p>Cantidad: ${product.quantity}</p>
                            <button class="btn btn-danger remove-from-cart" data-index="${index}">Eliminar</button>
                        </div>
                    </div>
                `;
                cartContainer.appendChild(cartItem);
            });
        }
    };

    cartContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-from-cart')) {
            const index = event.target.getAttribute('data-index');
            if (cart[index].quantity > 1) {
                cart[index].quantity--; // Decrementar la cantidad si es mayor que 1
            } else {
                cart.splice(index, 1); // Eliminar el producto si la cantidad es 1
            }
            localStorage.setItem('cart', JSON.stringify(cart)); // Actualiza el localStorage
            updateCart(); // Actualiza la interfaz
        }
    });

    updateCart();
});
