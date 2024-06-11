<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['index'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['cart'][$index])) {
        // Elimina solo la instancia específica del producto del carrito
        array_splice($_SESSION['cart'], $index, 1);
        // Opcionalmente, actualiza el contador del carrito
        $_SESSION['cart_count'] = count($_SESSION['cart']);
    }
}

// Redirige de vuelta al carrito o a otra página
header('Location: carrito.php');
exit();
?>
