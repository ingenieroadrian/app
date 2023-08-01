<?php include('../templates/cabecera.php');?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacto - Liga Vallecaucana de Tenis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
  <div class="container mt-4">
    <h2>Contacto</h2>
    <p>¡Estamos encantados de responder tus preguntas! Por favor, completa el siguiente formulario para solicitar más información:</p>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="asunto">Asunto:</label>
        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingrese el asunto" required>
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje:</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escriba su mensaje" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include('../templates/pie.php');?>
