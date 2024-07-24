<?php

function updateCart($cart) {
    $cartHtml = '<div id="cart" class="container">';
    if (empty($cart)) {
        $cartHtml .= '<p>El carrito está vacío.</p>';
    } else {
        foreach ($cart as $index => $product) {
            $cartHtml .= '<div class="cart-item">';
            $cartHtml .= '<div class="product-info">';
            $cartHtml .= '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
            $cartHtml .= '<div>';
            $cartHtml .= '<h2>' . $product['name'] . '</h2>';
            $cartHtml .= '<p>' . $product['description'] . '</p>';
            $cartHtml .= '<p>Cantidad: ' . $product['quantity'] . '</p>';
            $cartHtml .= '<form action="remove_from_cart.php" method="POST">';
            $cartHtml .= '<input type="hidden" name="index" value="' . $index . '">';
            $cartHtml .= '<button type="submit" class="btn btn-danger">Eliminar</button>';
            $cartHtml .= '</form>';
            $cartHtml .= '</div>';
            $cartHtml .= '</div>';
            $cartHtml .= '</div>';
        }
    }
    $cartHtml .= '</div>';
    return $cartHtml;
}


?>
