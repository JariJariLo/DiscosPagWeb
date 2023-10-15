<?php


//Creamos la conexion
$conn = mysqli_connect("localhost:3308","root","","discos");

//Verificamos la conexion
if (!$conn){
die ("No se ha podido conectar con la base de datos" . mysqli_connect_error());
}

echo "Conectado";
mysqli_close($conn);
?>