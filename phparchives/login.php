<?php
include 'conection.php';
if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $POST['nombre']);
    $passw=mysqli_real_escape_string($conn, $POST['id']);

    $select_users = mysqli_query($conn, "SELECT * FROM 'users' WHERE nombre=' $name' AND contraseña='$passw'") or die('fallo de la consulta');

    if(mysqli_num_rows($select_users)>0){
        $message[]='usuario existe!';

    }else{
        $message[]='registrese por favor!';
    }
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="form-container">
    <form action="validar.php" method="post">
        <h1>Sistema de Login</h1>
        <p>nombre<input type="text" placeholder="ingese su nombre" name="nombre" class="box">
        <p>contraseña<input type="text" placeholder="ingese su contraseña" name="id" class="box">
            
        <input type="submit" name="submit" value="Login now" class="btn">
        <p>ya tienes una cuenta?</p>
    </form>
</div>
</body>
</html>