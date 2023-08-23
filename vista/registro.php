<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <script src=../controlador/banderas.js></script>

    <title>Farmatodo</title>
</head>
<body>
<div class="signupFrm">
    <form ction="../controlador/registro.php" method="post" name="loggin" class="form">
      <h2 class="title">Regístrate y accede a todos los beneficios de Mi farmatodo</h2>

      <div class="inputContainer">
        <input type="text" class="input" name="nombre" placeholder="a">
        <label for="" class="label">Nombre</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" name="apellido" placeholder="a">
        <label for="" class="label">Apellido</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input"  name="correo" placeholder="a">
        <label for="" class="label">Correo electronico</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input"name="password" placeholder="a">
        <label for="" class="label">Contraseña</label>
      </div>
      <div class="inputContainer">
        <input type="text" class="input" name="telefono" placeholder="a">
        <label for="" class="label">Número de teléfono</label>
      </div>

      <div>
      <input type="radio" id="contactChoice1" name="contact" value="email" />
      <label for="contactChoice1">MUJER</label>

      <input type="radio" id="contactChoice2" name="contact" value="phone" />
      <label for="contactChoice2">HOMBRE</label>
    </div>
    
      <input type="submit" class="submitBtn" value="Registrarme">
    </form>
  </div>
 
</body>
</html>