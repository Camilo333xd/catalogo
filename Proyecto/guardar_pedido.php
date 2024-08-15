<?php
session_start();

// Conexión a la base de datos
include 'models/conexion.php'; // Asegúrate de tener una conexión válida a la base de datos

// Verificar si se ha enviado el formulario para guardar los productos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar_productos'])) {
    // Obtener el carrito de la sesión
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    if (!empty($cart)) {
        // Construir la cadena del pedido
        $pedido = '';
        $valorTotal = 0;
        foreach ($cart as $product) {
            $pedido .= $product['name'] . ' - ' . $product['price'] . ' (Cantidad: ' . $product['quantity'] . '), ';
            $valorTotal += $product['price'] * $product['quantity'];
        }

        // Remover la última coma y espacio
        $pedido = rtrim($pedido, ', ');

        // Guardar el pedido en la base de datos
        $sql = "INSERT INTO pedidos (productos,valor_total) VALUES (?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sd', $pedido , $valorTotal);

        if ($stmt->execute()) {
            // Si la inserción fue exitosa, vaciar el carrito
            $_SESSION['cart'] = [];
            $_SESSION['cart_count'] = 0; // Resetear el contador de productos del carrito

            // Redirigir de nuevo al carrito para recargar la página
            header('carrito.php');
            exit();
        } else {
            echo "Error al guardar el pedido: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
