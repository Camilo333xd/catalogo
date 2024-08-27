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
                    $_SESSION['cart'][$index]['quantity']--;
                    $product['quantity'] = $_SESSION['cart'][$index]['quantity']; 
                    $action = 'reduced';
                } else {
                    // esta elimina el producto del carrito
                    array_splice($_SESSION['cart'], $index, 1);
                    $action = 'removed';
                }
        
                $_SESSION['cart_count']--;
                
                // Respuesta con los detalles del producto y la acción realizada , recuerda , para la respueta ajax
                $response = [
                    'status' => 'success',
                    'action' => $action,
                    'product' => $product,
                    'cart_count' => $_SESSION['cart_count']
                ];
            } else {
                $response = ['status' => 'error', 'message' => 'Product not found'];
            }
        } else {
            $response = ['status' => 'error', 'message' => 'Invalid request'];
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
        session_start(); 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener el carrito de la sesión
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        
            if (!empty($cart)) {
                $pedido = '';
                $valorTotal = 0;
                foreach ($cart as $product) {
                    $pedido .= $product['name'] . ' - ' . $product['price'] . ' (Cantidad: ' . $product['quantity'] . '), ';
                    $valorTotal += $product['price'] * $product['quantity'];
                }
        
                $pedido = rtrim($pedido, ', ');

                $catalogo = new Catalogo();
                $result = $catalogo->guardarPedido($pedido, $valorTotal);

                if ($result) {
                    $_SESSION['cart'] = [];
                    $_SESSION['cart_count'] = 0; 
                    
                    $_SESSION['suit'] = true; 
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