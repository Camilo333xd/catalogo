<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Comprobar si el producto ya está en el carrito
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['name'] == $product['name']) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $product['quantity'] = 1;
        $_SESSION['cart'][] = $product;
    }

    // Actualizar el contador del carrito
    $_SESSION['cart_count'] = isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] + 1 : 1;

    // Redirigir de vuelta al catálogo
    header('Location: catalogo.php');
    exit();
}
?>
