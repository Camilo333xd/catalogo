document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    // Actualizar el contador del carrito al cargar la página
    updateCartCount();
});

function addToCart(event) {
    const productElement = event.target.closest('.product');
    const productName = productElement.querySelector('.card-title').textContent;
    const productDescription = productElement.querySelector('.card-text').textContent;

    const product = {
        name: productName,
        description: productDescription,
    };

    // Comprobar si el producto ya está en el carrito
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existingProduct = cart.find(item => item.name === product.name);
    if (existingProduct) {
        existingProduct.quantity++; // Incrementar la cantidad del producto existente
    } else {
        product.quantity = 1;
        cart.push(product); // Agregar el producto al carrito si no existe
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Producto añadido al carrito');
    updateCartCount(); // Actualizar el contador del carrito
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCountElement = document.getElementById('cuenta-carrito');
    const totalCount = cart.reduce((total, item) => total + item.quantity, 0); // Calcular el total de productos en el carrito
    cartCountElement.textContent = totalCount;
}

// localStorage.clear();