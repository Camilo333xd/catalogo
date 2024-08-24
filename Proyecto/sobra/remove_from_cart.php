<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['index'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['cart'][$index])) {
        $product = $_SESSION['cart'][$index];

        if ($product['quantity'] > 1) {
            // Disminuye la cantidad en 1
            $_SESSION['cart'][$index]['quantity']--;
        } else {
            // Elimina el producto del carrito
            array_splice($_SESSION['cart'],$index, 1);
        }

        // Actualiza el contador del carrito
        $_SESSION['cart_count']--;
        $response = ['status' => 'success'];

    }
}
echo json_encode($response);
?>

00