<?php include('../templates/cabecera.php');?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario de Registro e Inicio de Sesión</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .container {
      margin-top: 50px;
    }

    .left-container,
    .right-container {
      padding: 20px;
    }

    .left-container {
      border-right: 1px solid #dee2e6;
    }

    .social-login-btn {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="row">
      <!-- Formulario de Registro -->
      <div class="col-md-6 left-container">
        <h2>Registro de Cliente</h2>
        <form>
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
          </div>

          <div class="form-group">
            <label for="password">Cedula:</label>
            <input type="text" class="form-control" id="cedula" placeholder="Ingrese su cedula">
          </div>

          <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
      </div>

      <!-- Formulario de Inicio de Sesión -->
      <div class="col-md-6 mt-4 mt-md-0 right-container">
        <h2>Iniciar Sesión</h2>
        <form>
          <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario">
          </div>
          <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña">
          </div>
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          <button type="button" class="btn btn-danger mt-2 social-login-btn">
            <i class="fab fa-google mr-2"></i>Iniciar Sesión con Google
          </button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include('../templates/pie.php');?>
