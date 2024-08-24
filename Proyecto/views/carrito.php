<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
// session_destroy()

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="petshop" content="pet products and services">
  <title>Pet stylo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/CSS/proyecto.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    .product-info {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .product-info img {
        max-width: 100px;
        height: auto;
    }

    body {
      background-image: url(../assets/Pictures/fondo.jpg);
    }

  </style>
</head>

<body>
  <header class="navbar navbar-expand-sm fondoHeader">
    <div class="container-fluid">
      <!--Icono-->
      <a class="navbar-brand" href="#">
        <img class="logo" src="../assets/Pictures/logo sin fondo.png" alt="">
      </a>
      <!--Icono menu-->
      <button style="background-color: #ee8133;" class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--Elementos del menu colapsable-->
      <div style="z-index: 100; background-color: #70d0df;" class="collapse navbar-collapse rounded p-4" id="menu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Citas</a>
          </li>
          <li class="nav-item dropdown">
            <a style="background-color: #ee8133;" class="btn nav-link dropdown-toggle" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown">Horarios</a>
            <ul class="dropdown-menu">
              <li class="dropdown-item">Lunes a Viernes: 8:00am a 6:00pm</li>
              <li class="dropdown-item">Sabados y Domingos: 11:00am a 4:00pm</li>
            </ul>
          </li>
        </ul>
        <div style="display: flex;align-items: center;gap: 20px;">
          <a class="d-flex ms-auto" href="">Inicia sesion</a>
        </div>
      </div>
    </div>
  </header>
  <h1 class="my-4 text-center btn-success">Carrito de Reservas</h1>
<div id="cart" class="container">
    <?php
    if (empty($cart)) {
        echo '<div class="alert alert-warning text-center">El carrito está vacío.</div>';
    } else {
        foreach ($cart as $index => $product) {
            echo '<div class="cart-item card mb-3">';
            echo '<div class="product-info card-body d-flex align-items-center">';
            echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '" class="img-thumbnail me-3">';
            echo '<div>';
            echo '<h5 class="card-title">' . htmlspecialchars($product['name']) . '</h5>';
            echo '<p class="card-text">' . htmlspecialchars($product['description']) . '</p>';
            echo '<p class="card-text">Cantidad: <span class="badge bg-info">' . htmlspecialchars($product['quantity']) . '</span></p>';
            echo '<form class="remover" method="POST">';
            echo '<input type="hidden" name="index" value="' . htmlspecialchars($index) . '">';
            echo '<button type="submit" class="btn btn-danger">Eliminar</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '<form action="../index.php?controller=catalogo&action=ReservarProducto" method="POST">';
        echo '<input type="hidden" name="guardar_productos" value="1">';
        echo '<button type="submit" class="btn btn-primary btn-block">Guardar Productos</button>';
        echo '</form>';
    } 
    ?>   
</div>
<div class="d-flex justify-content-center align-items-center mt-4 mb-4">
  <a href="catalogo.php" class="btn btn-lg text-dark px-5" style="font-size: 1.25rem; background-color: #ee8133;">
    Volver al Catálogo
  </a>
</div>

<script src="..\assets\JS\cart.js"></script>
</body>
</html>
