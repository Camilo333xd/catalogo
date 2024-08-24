<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: beige; /* Gris claro */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <h1 class="text-center my-4 bg-primary text-white border border-dark p-3 " style="border-radius: 30px;">Productos en catálogo</h1>
    <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Imagen</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once __DIR__ . '/../models/producto.php';

                $productos = Producto::obtenerProductos($conn);

                foreach ($productos as $producto) {
                    echo '<tr>
                        <td class="text-center align-middle">' . htmlspecialchars($producto['Nombre_P']) . '</td>
                        <td class="text-center align-middle">' . htmlspecialchars($producto['descripcion']) . '</td>
                        <td class="text-center align-middle">' . htmlspecialchars($producto['Precio_P']) . '</td>
                        <td class="text-center align-middle">' . htmlspecialchars($producto['Cantidad']) . '</td>
                        <td class="text-center align-middle"><img src="' . htmlspecialchars($producto['image']) . '" alt="Imagen Producto 1" class="img-thumbnail" style="width: 100px;"></td>
                        <td class="text-center align-middle"><button class="btn btn-warning">Actualizar</button></td>
                        <td class="d-flex justify-content-center align-items-center" style="height: 100px;"><form action    ="..\index.php?controller=producto&action=eliminar" method="POST"><input type="hidden" name="id" value="' . htmlspecialchars($producto['ID_Producto']) . '"><button type="submit" class="btn btn-danger">Eliminar</button></form></td>
                    </tr>';
                }
                
                ?>
            </tbody>
        </table>
        <br>
        <div class="text-center mt-4">
           <a href="Formulario.php" class="btn btn-success btn-lg">Crear producto</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+9oM29Xo8BD7a36l5aOgfS7N1xLVU" crossorigin="anonymous"></script>
</body>
</html>
