<?php

$servidor = "localhost";  
$user     = "root";
$pass     = "";
$db       = "sistema_seguridad";


$conexion = mysqli_connect($servidor ,$user ,$pass  ,$db  );

# confirmamos que hicimos la conecxcion a la base de datos
if($conexion->connect_errno){
    die ("La conexion a fallado" . $conexion->connect_errno);
}
else {
    echo "Conecxion exitosa papi ";
}

?>
    