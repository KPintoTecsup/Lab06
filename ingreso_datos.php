<?php
require 'Conexcion.php';

$usuario    = $_POST["usuario"];
$nombre     = $_POST["nombre"];
$correo     = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$insertar= "INSERT INTO usuarios2 Values ( '$usuario  ','$nombre ','$correo ' ,'$contraseña ')";
$query = mysqli_query($conexion,$insertar);
# confirmamos que ingreso de datos
if($query){
    echo "<script> alert('correcto');
    location.href = 'index.html';</script>";
}else {
    echo "<script> alert('incorrecto');
    location.href = 'registro.html';
    </script>";
}


?>


