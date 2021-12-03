<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Formulario</title>
</head>
<body>
  <div class="contenedor">
    <form action="validacion.php" method = "post">
      <h2>Login</h2>
      <div class="formulario">
        <label for="">Correo</label>
        <input type="email" name ="email">
        <label for="">Contraseña</label>
        <input type="password" name="contraseña">
      </div>
      <button>Ingresar</button>
    </form>
    <footer><h2>Curso php</h2></footer>
  </div>
</body>
</html>