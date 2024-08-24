<?php
require_once __DIR__ . '/../models/producto.php';
require_once __DIR__ . '/../models/conexion.php';
class ProductoController {

    public function guardarProducto() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoge los datos del formulario
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            // Manejo del archivo de imagen
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $uploadDir = 'C:\xampp\htdocs\Proyecto\assets\Pictures\nuevas\\'; // Carpeta donde se guardará la imagen
                $showdir = '..\assets\Pictures\nuevas\\';

                $uploadFile = $uploadDir . basename($_FILES['image']['name']);
                $showFile = $showdir . basename($_FILES['image']['name']);

                // Mueve el archivo de imagen al directorio de destino
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    // Guarda el producto en la base de datos usando el modelo
                    $producto = new Producto($name, $description, $price, $showFile, $quantity);
                    if ($producto->guardar()) {
                        echo "Producto guardado exitosamente.";
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
        }
    }

}
?>
