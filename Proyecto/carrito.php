<?php
session_start();

require_once "funcion.php";

// Obtener el carrito desde la sesión o inicializarlo si está vacío
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Actualizar el contenido del carrito en HTML
$cartContent = updateCart($cart);
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
  <link rel="stylesheet" href="proyecto.css">
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
  </style>
</head>

<body>
  <header class="navbar navbar-expand-sm fondoHeader">
    <div class="container-fluid">
      <!--Icono-->
      <a class="navbar-brand" href="#">
        <img class="logo" src="Pictures/logo sin fondo.png" alt="">
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
  <h1>Carrito de Reservas</h1>
    <!-- Aquí mostramos el contenido del carrito -->
    <div id="cart">
      <?php echo $cartContent; ?>
    </div>
    <a href="catalogo.php">Volver al Catálogo</a>
    <script src="cart.js"></script>

  <!-- Script para manejo de AJAX -->
  <!-- <script>
    $(document).ready(function() {
      // Manejar el evento de eliminación de producto
      $('#cart').on('submit', 'form', function(event) {
        event.preventDefault(); // Prevenir la acción por defecto del formulario

        var form = $(this); // Referencia al formulario actual
        var url = form.attr('action'); // Obtener la URL del formulario
        var data = form.serialize(); // Serializar los datos del formulario

        $.ajax({
          url: url, // La URL del script PHP que procesa los datos
          type: 'POST', // El método de la solicitud
          data: data, // Los datos del formulario
          success: function(response) {
            // Actualizar el contenido del carrito
            $('#cart').html(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error en la solicitud AJAX:', textStatus, errorThrown);
          }
        });
      });
    });
  </script> -->
</body>

</html>
