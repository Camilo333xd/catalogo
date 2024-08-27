<?php
require_once 'models\conexion.php';
require_once 'models\producto.php';
require_once 'controllers\ProductController.php'; 
require_once 'controllers\CatalogoController.php'; 

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'producto';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'producto':
        $productoController = new ProductoController();
        if (method_exists($productoController, $action)) {
            $productoController->$action();
        } else {
            echo "Acción no válida para el controlador producto.";
        }
        break;

    case 'catalogo':
        $catalogocontroller = new CatalogoController();
        if (method_exists($catalogocontroller, $action)) {
            $catalogocontroller->$action();
        } else {
            echo "Acción no válida para el controlador catalogo.";
        }
        break;

    default:
        echo "Controlador no válido.";
        break;
}

 ?>


