<?php
/*
$paciente=$_POST['paciente'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$contraseña=$_POST['id'];*/

//estas son tus variables para rellenar los campos de la consulta
 if(isset($_POST['nombre'])) {
    $paciente = $_POST['nombre'];
  }
   else {
    // Manejar el error
    die("Error ");
       }

 
 if (isset($_POST['id'])) {
    $contraseña = $_POST['id'];
 } else {
    // Manejar el error
    die("Error: El campo 'id' no está definido en la solicitud.");
 }


session_start();
$_SESSION['paciente']=$paciente;
//aqui teconectas con tus datos a la base de datos
$conexion=mysqli_connect("localhost:3308","root","","discos");
//consulta sql la puedes modificar con los datos que quieras 
$consulta="SELECT * from usuarios where nombre='$paciente' and id='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
//aqui si todo va bien te lleva a una pagina despues de loguearte en este caso es home.php la puedes modificar si quieres
if($filas){
header("location:home.php");
}
        else{

            ?>
            <?php
            include("");
            ?>
            <h1>ERROR DE AUTENTICACIÓN</h1>
            <?php  
            }

mysqli_free_result($resultado);
    mysqli_close($conexion);