<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['index'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['cart'][$index])) {
        $product = $_SESSION['cart'][$index];

        // Verifica la cantidad
        if ($product['quantity'] > 1) {
            // Disminuye la cantidad en 1
            $_SESSION['cart'][$index]['quantity']--;
        } else {
            // Elimina el producto si la cantidad llega a 0
            array_splice($_SESSION['cart'], $index, 1);
        }
        
        // Opcionalmente, actualiza el contador del carrito
        $_SESSION['cart_count'] = count($_SESSION['cart']);
    }
}
// Redirige de vuelta al carrito o a otra página
header('Location: carrito.php');
exit();
?>
