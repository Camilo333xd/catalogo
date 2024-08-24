<?php
require_once __DIR__ . '/../models/conexion.php';
require_once __DIR__ . '/../models/CatalogoModel.php';

class CatalogoController {
    function QuitarCarrito() {
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
    }


    function AñadirCarrito() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'image' => $_POST['image']
            ];
        
            $found = false;
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            
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
        
           
            $_SESSION['cart_count'] = isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] + 1 : 1;
        
           
            echo json_encode(['cart_count' => $_SESSION['cart_count']]);
        }
    }

    function ReservarProducto() {
        session_start(); // Asegúrate de iniciar la sesión

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

                // Instanciar el modelo y guardar el pedido
                $catalogo = new Catalogo();
                $result = $catalogo->guardarPedido($pedido, $valorTotal);

                if ($result) {
                    // Si la inserción fue exitosa, vaciar el carrito
                    $_SESSION['cart'] = [];
                    $_SESSION['cart_count'] = 0; // Resetear el contador de productos del carrito
        
                    // Redirigir de nuevo al carrito para recargar la página
                    header('Location: views/carrito.php');
                    exit();
                } else {
                    echo "Error al guardar el pedido.";
                }
            }
        }
    }
}

?>