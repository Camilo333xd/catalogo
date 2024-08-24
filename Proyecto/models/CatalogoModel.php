<?php
require_once 'conexion.php';

class Catalogo {
    public function guardarPedido($pedido, $valorTotal) {
        global $conn;

        $sql = "INSERT INTO pedidos (productos, valor_total) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sd', $pedido, $valorTotal);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
