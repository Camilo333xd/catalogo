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
  <style>
    body {
      background-image: url(Pictures/fondo.jpg);
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
          <a href="carrito.php"><img src="Pictures/carrito-de-compras.png" alt="Carrito de compras" class="logocar"><span id="cuenta-carrito"> 0</span></a>
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
                <img src="Pictures/IMGP7944.avif" class="d-block w-100" alt="Juguetes para mascotas"
                  style="width: 100%; height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Juguetes para mascotas</h5>
                  <p>Todo tipo de juguetes para las mascota los puedes encontrar mas abajo</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Pictures/productos-para-mascotas.jpg" class="d-block w-100" alt="Accesorios para mascotas"
                  style="width: 100%; height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Accesorios para la casa</h5>
                  <p>Encuentra accesorios esenciales para tu mascota que todo hogar necesita</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Pictures/fotolia_131689630.jpg" class="d-block w-100" alt="Higiene de mascotas"
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
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/shampoo.jpg" class="card-img-top" alt="Shampoo"
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Shampoo petys</h5>
                <p class="card-text">Frasco de shampoo familia perros y gatos 235 ml.</p>
                <p class="card-text">PRECIO: 21.000</p>
                <?php
                include("mostrar.php")
                ?>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/REPELENTE.jpg" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Repelente de pulgas petys</h5>
                <p class="card-text">Spray Repelente de Pulgas para Perros Petys de 180 ml.</p>
                <p class="card-text">PRECIO: 16.700</p>
                <?php
                include("mostrar.php")
                ?>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/mirringo_adulto.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Comida mirringo adulto</h5>
                <p class="card-text">Comida para gato mirringo adultos. Bulto de 1kg</p>
                <p class="card-text">PRECIO: 16.700</p>
                <?php
                include("mostrar.php")
                ?>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/peinilla.jpg" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Peinilla dientes medianos</h5>
                <p class="card-text">Peinilla para pelo de mascotas mango morado.</p>
                <p class="card-text">PRECIO: 12.600</p>
                <?php
                include("mostrar.php")
                ?>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/eliminadordeolorres.jpg" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Eliminador de olores petys</h5>
                <p class="card-text">Spray marca familia para malos olores de 50ml </p>
                <p class="card-text">PRECIO: 5.600</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/Redes/shampoo 2.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Frasco shampoo burby</h5>
                <p class="card-text">Shampoo para perros en presentacion de 200 ml.</p>
                <p class="card-text">PRECIO: 24.800</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/pala_arenera.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Pala arenera</h5>
                <p class="card-text">pala para mantener limpia la arenera de tu gato.</p>
                <p class="card-text">PRECIO: 9.900</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/comidaenlatada_perro.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Lata de comida</h5>
                <p class="card-text">comida enlatada para perro hills cuidado digestivo.</p>
                <p class="card-text">PRECIO: 29.300</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/perone_ahumado.png" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Perone ahumado</h5>
                <p class="card-text">Hueso natural deshidratado de res o cerdo sabor ahumado</p>
                <p class="card-text">PRECIO: 24.000</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/patica_cerdoblanco.png" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Patica cerdo blanco</h5>
                <p class="card-text">Hueso natural deshidratado de res o cerdo sabor natural blanco.</p>
                <p class="card-text">PRECIO: 13.000</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/snacks_cabanos.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">snacks cabanos</h5>
                <p class="card-text">Ricos bocadillos masticables para perros con diferntes colores.</p>
                <p class="card-text">PRECIO: 2.700</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/cama_descanso.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Cama relax</h5>
                <p class="card-text">Cama de relajacion para mascotas de alta calidad de microfibra.</p>
                <p class="card-text">PRECIO: 140.000</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/ratones.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Ratones x2 para gato</h5>
                <p class="card-text">Ratones de juguete hechos de cuerda para entretener a tu felino y super resistentes.</p>
                <p class="card-text">PRECIO: 16.700</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/correa_perroazul.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Correa sport cocos</h5>
                <p class="card-text"> fabricado en herrajes metálicos y le da un toque de color a los paseos de tu peludo.</p>
                <p class="card-text">PRECIO: 35.000</p>
                <button href="#" class="btn btn-primary add-to-cart">Añadir al carrito</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 product">
            <div class="card" style="width: 18rem; margin:auto;">
              <img src="Pictures/removedor_pelos.webp" class="card-img-top" alt="..."
                style="height: 200px; width: 60%; margin: 0px auto;">
              <div class="card-body" style="background-color: #ee8133;">
                <h5 class="card-title">Removedor de pelos</h5>
                <p class="card-text">Removedor de pelos y pelusas para mantener la casa limpia y libre de pelo de la mascota</p>
                <p class="card-text">PRECIO: 36.200</p>
                <button href="#" class="btn btn-primary add-to-cart">Ir a algún lugar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <script src="app.js"></script>
</body>

</html>