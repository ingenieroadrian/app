<?php include('../templates/cabecera.php');?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Landing Page Liga Vallecaucana de Tenis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 50px;
    }

    .lead-capture {
      background-color: #f8f9fa;
      padding: 50px;
      border-radius: 5px;
    }

    .aliados-carousel .carousel-inner {
      display: flex;
      align-items: center;
    }

    .aliados-carousel .carousel-item {
      justify-content: center;
    }

    .aliados-carousel img {
      max-height: 100px;
      margin: 0 20px;
    }
  </style>
</head>
<body>
  <!-- Lado Izquierdo - Captura de Leads -->
<div class="col-md-6">
  <div class="lead-capture">
    <img src="ruta_imagen_banner.jpg" alt="Banner de Bienvenida" class="img-fluid mb-4">
    <h2>¡Únete a la Liga Vallecaucana de Tenis!</h2>
    <p>Ingresa tus datos para recibir noticias, eventos y promociones relacionadas con el tenis en el Valle del Cauca.</p>
    <form>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
      </div>
      <button type="submit" class="btn btn-primary">¡Quiero recibir noticias!</button>
    </form>
  </div>
</div>


      <!-- Lado Derecho - Carrusel de Aliados -->
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="aliados-carousel">
          <div id="carouselAliados" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="ruta_logo_aliado_1.png" alt="Aliado 1">
              </div>
              <div class="carousel-item">
                <img src="ruta_logo_aliado_2.png" alt="Aliado 2">
              </div>
              <div class="carousel-item">
                <img src="ruta_logo_aliado_3.png" alt="Aliado 3">
              </div>
              <!-- Agregar más aliados aquí -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php include('../templates/pie.php');?>

