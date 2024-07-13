<?php 
// variables que almacenan las 
$Servidor="localhost";
$Usuario="root";
$Clave="";
$DB="";

// se crea una nueva instancia de conexion a la base de datos
$conexion= mysqli_connect($Servidor,$Usuario,$Clave,$DB);

if ($conexion->connect_error) {
    die("La conexion no se pudo establecer: ".$conexion->connect_error);
}else{
    echo "la conexion se ha establecido exitosamente";
}
?>