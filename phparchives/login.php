<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./styleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="form-container">
    <form action="validar.php" method="post">
        <h1>Sistema de Login</h1>
        <p>nombre<input type="text" placeholder="ingese su nombre" name="nombre" class="box">
        <p>apellido1<input type="text" placeholder="ingese su primer apellido" name="apellido1">
        <p>apellido2<input type="text" placeholder="ingese su segundo apellido" name="apellido2">
        <p>contraseña<input type="text" placeholder="ingese su contraseña" name="id">

        <input type="submit" value="Ingresar">
    </form>
</div>
</body>
</html>