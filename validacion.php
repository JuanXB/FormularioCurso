<?php
  $correo = $_POST['email'];
  $contraseña = $_POST['contraseña'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="validacion.css">
  <title>Validación</title>
</head>
<body>
  <h2>
  <?php
    echo "Bienvenido!! tu correo es: $correo y tu contrseña es $contraseña";
  ?>
  </h2>
</body>
</html>