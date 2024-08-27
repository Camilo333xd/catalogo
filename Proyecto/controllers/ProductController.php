<?php
require_once __DIR__ . '/../models/producto.php';
require_once __DIR__ . '/../models/conexion.php';
class ProductoController {

    public function guardarProducto() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $uploadDir = 'C:\xampp\htdocs\Proyecto\assets\Pictures\nuevas\\'; 
                $showdir = '..\assets\Pictures\nuevas\\';

                $uploadFile = $uploadDir . basename($_FILES['image']['name']);
                $showFile = $showdir . basename($_FILES['image']['name']);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {

                    $producto = new Producto($name, $description, $price, $showFile, $quantity);
                    if ($producto->guardar()) {
                        session_start();
                        $_SESSION['suit3'] = true ;
                        
                        header('Location: views/AdminProducto.php');
                    } else {
                        echo "Error al guardar el producto.";
                    }
                } else {
                    echo "Error al subir la imagen.";
                }
            } else {
                echo "Por favor, sube una imagen válida.";
            }
        }
    }

    public function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $id = $_POST['id'];
            Producto::eliminarproduc($id);
            session_start(); 
            $_SESSION['suit2'] = true ;
            header('Location: views/AdminProducto.php');
        }
    }

}
?>
