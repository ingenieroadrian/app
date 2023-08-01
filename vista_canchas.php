<?php include('../templates/cabecera.php');?>
<?php include('../secciones/canchas.php');?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario de Reserva de Canchas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <!-- Fuente de iconos de FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .container {
      margin-top: 50px;
    }

    .social-login-btn {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <h2>Reserva de Canchas</h2>
        <form>
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
          </div>
          <div class="form-group">
            <label for="fecha">Fecha de Reserva:</label>
            <div class="input-group date" id="datepicker" data-provide="datepicker">
              <input type="text" class="form-control" id="fecha" placeholder="Seleccione la fecha">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="hora">Hora de Reserva:</label>
            <select class="form-control" id="hora">
              <!-- Horarios generados mediante JavaScript -->
            </select>
          </div>
          <div class="form-group">
            <label for="cancha">Cancha:</label>
            <select class="form-control" id="cancha">
              <option>Seleccione una cancha</option>
              <option>Cancha 1</option>
              <option>Cancha 2</option>
              <option>Cancha 3</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <!-- Colocar aquí el código para la publicidad y opción de Google Ads -->
        <div class="card">
          <img src="ruta_de_la_imagen.jpg" class="card-img-top" alt="Publicidad">
          <div class="card-body">
            <h5 class="card-title">Publicidad</h5>
            <p class="card-text">Aquí puedes colocar imágenes de publicidad relacionadas con la Liga Vallecaucana de Tenis.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>
        <!-- Colocar aquí la opción para escalar a Google Ads o más publicidad -->
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script>
    $(document).ready(function(){
      // Inicializar el DatePicker
      $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        orientation: 'bottom'
      });

      // Generar lista de horarios
      var horaSelect = document.getElementById('hora');
      for (var hora = 6; hora <= 18; hora++) {
        var amPm = hora < 12 ? 'AM' : 'PM';
        var horaFormato12 = hora % 12 === 0 ? 12 : hora % 12;
        var horarioOption = document.createElement('option');
        horarioOption.textContent = horaFormato12 + ':00 ' + amPm;
        horaSelect.appendChild(horarioOption);
      }
    });
  </script>
</body>
</html>

<?php include('../templates/pie.php');?>
