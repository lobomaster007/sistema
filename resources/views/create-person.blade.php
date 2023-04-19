<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <title>Document</title>
</head>
<body>
<script src="{{ asset('js/app.js') }}"></script>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form method="POST" action="{{ route('person.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
          <label for="direccion">Dirección:</label>
          <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="form-group">
          <label for="ci">CI:</label>
          <input type="text" class="form-control" id="ci" name="ci" required>
        </div>
        <div class="form-group">
          <label for="pais">País:</label>
          <input type="text" class="form-control" id="pais" name="pais" required>
        </div>
        <div class="form-group">
          <label for="ciudad">Ciudad:</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad" required>
        </div>
        <div class="form-group">
          <label for="foto">Foto:</label>
          <input type="file" class="form-control-file" id="foto" name="foto">
        </div>
        <div class="form-group">
          <label for="correo_electronico">Correo electrónico:</label>
          <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
        </div>
        <div class="form-group">
          <label for="numero_telefono">Número de teléfono:</label>
          <input type="tel" class="form-control" id="numero_telefono" name="numero_telefono" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>