<?php
$servername= "localhost";
$username ="";
$password="";
$database="";

//Creamos la conexion
$conn = mysqli_connect($servername,$username,$password,$database);

//Verificamos la conexion
if (!$conn){
die ("No se ha podido conectar con la base de datos" . mysqli_connect_error());
}

echo "Conectado";
mysqli_close($conn);
?>