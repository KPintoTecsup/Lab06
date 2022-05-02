<?php

require 'Conexcion.php';

$correoo     = $_POST["correoo"];
$contrasenia = $_POST["contraseñaa"];

#hacemos la conexcion a la base de datos 

$consulta="SELECT * FROM usuarios2 WHERE correo='$correoo' AND contrasena='$contrasenia'";
$resultado=mysqli_query($conexion,$consulta);


# confirmamos login
if($resultado){     
    echo "<script> alert('correcto');
    location.href = 'index.html';</script>";
}else{  
    echo"<script> alert('incorrecto'); 
    location.href = 'login.html';</script>";
}   

?>
