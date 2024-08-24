<?php
require_once 'conexion.php';

class Producto {

    public string $name;
    public string $description;
    public int $price;
    public string $image;
    public int $quantity;

    public function __construct($name,$description,$price,$image,$quantity){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->quantity = $quantity;
    }

    public function guardar() {
        global $conn; // Asumiendo que $conn está disponible globalmente

        $stmt = $conn->prepare("INSERT INTO productos (Nombre_P,Precio_p,Cantidad,descripcion,image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("siiss", $this->name, $this->price, $this->quantity, $this->description, $this->image);
        
        return $stmt->execute(); // Retorna true si la ejecución fue exitosa
    }


    public static function obtenerProductos($conn) {
        $sql = "SELECT * FROM productos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $productos = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productos[] = $row; // Añadir cada fila al array
            }
        }

        return $productos; // Devolver un array asociativo de productos
    }

    public static function eliminarproduc($id) {
        global $conn; // Asumiendo que $conn está disponible globalmente

        // Consulta para eliminar el producto
        $stmt = $conn->prepare("DELETE FROM productos WHERE ID_Producto = ?");
        $stmt->bind_param("i", $id); // "i" indica que es un entero
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Producto eliminado exitosamente.";
        } else {
            echo "Error al eliminar el producto.";
        }

        // Cerrar conexiones
        $stmt->close();
        $conn->close();
    }



}

?>
