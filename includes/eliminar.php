<?php

session_start();

if(
    $_SESSION["rol"]
    != "administrador"
){

    die("Acceso denegado");
}

include "conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM noticias
WHERE id='$id'";

if(
    mysqli_query(
        $conexion,
        $sql
    )
){

    header(
        "Location: ../noticias.php"
    );

}else{

    echo "Error al eliminar";
}

?>