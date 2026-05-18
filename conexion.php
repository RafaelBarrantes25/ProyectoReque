<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "avisatec"
);

if(!$conexion){
    die("Error de conexión");
}

?>