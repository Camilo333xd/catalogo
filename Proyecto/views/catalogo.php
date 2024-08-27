<?php
session_start();

// Este es el contador de productos que van al carrito
$cartCount = isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0;

require_once __DIR__ . '/../models/producto.php';
require_once __DIR__ . '/../models/conexion.php';


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
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
  <a href="carrito.php">
    <img src="../assets/Pictures/carrito-de-compras.png" alt="Carrito de compras" class="logocar">
    <!-- Aqui muestro el contador de productos en el carrito -->
    <span id="cuenta-carrito"><?php echo $cartCount; ?></span>
  </a>
  <a class="d-flex ms-auto" href="">Inicia sesion</a>
</div>
      </div>
    </div>
  </header>
  <section>
    <!--Carrusel-->
    <div class="container" style="margin-top:8px ;">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/Pictures/IMGP7944.avif" class="d-block w-100" alt="Juguetes para mascotas"
                  style="width: 100%; height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Juguetes para mascotas</h5>
                  <p>Todo tipo de juguetes para las mascota los puedes encontrar mas abajo</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/Pictures/productos-para-mascotas.jpg" class="d-block w-100" alt="Accesorios para mascotas"
                  style="width: 100%; height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Accesorios para la casa</h5>
                  <p>Encuentra accesorios esenciales para tu mascota que todo hogar necesita</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/Pictures/fotolia_131689630.jpg" class="d-block w-100" alt="Higiene de mascotas"
                  style="width: 100%; height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Productos de aseo</h5>
                  <p>Manten la higiene de tu mascota con diferentes productos que encontraras en nuestro catalogo</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--Catalogo-->
      <div class="container container-sm px-5" style="background-color: rgba(112,208,223,255);margin-top:20px;">
        <div class="row">
          <div class="col-12">
            <h2 class="Titulo" >Catalogo Pet Stylo</h2>
          </div>
        </div>
        <div class="row g-5 container mx-auto text-center product">
        <?php
        // Un bucle en donde se genera producto por producro
        $productos = Producto::obtenerProductos($conn);
            foreach ($productos as $producto) {
              echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="card" style="width: 18rem; margin:auto;">
                              <img src="'. htmlspecialchars($producto['image']) .'" class="card-img-top" alt="' . htmlspecialchars($producto['Nombre_P']) . '"
                                  style="height: 200px; width: 60%; margin: 0px auto;">
                              <div class="card-body" style="background-color: #ee8133;">
                                  <h5 class="card-title">' . htmlspecialchars($producto['Nombre_P']) . '</h5>
                                  <p class="card-text">' . htmlspecialchars($producto['descripcion']) . '</p>
                                  <p class="card-text">PRECIO: ' . htmlspecialchars($producto['Precio_P']) . '</p>
                                  <p class="card-text"><b>Cantidad:</b> ' . htmlspecialchars($producto['Cantidad']) . '</p>
                                  <form class="productForm">
                                      <input type="hidden" name="name" value="' . htmlspecialchars($producto['Nombre_P']) . '">
                                      <input type="hidden" name="description" value="' . htmlspecialchars($producto['descripcion']) . '">
                                      <input type="hidden" name="price" value="' . htmlspecialchars($producto['Precio_P']) . '">
                                      <input type="hidden" name="image" value="' . htmlspecialchars($producto['image']) . '">
                                      <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                                  </form> 
                              </div>
                          </div>
                      </div>'; 
          }     
        // ?>
        </div>
      </div>
    </div>
  </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="..\assets\JS\script.js"></script>
</body>
</html>