<?php

session_start();

if(
    $_SESSION["rol"]
    != "administrador"
){

    die("Acceso denegado");
}

include "conexion.php";

$id = $_POST["id"];

$titulo = $_POST["titulo"];

$descripcion =
$_POST["descripcion"];

$sqlImagen = "";

if(

    !empty(
        $_FILES["imagen"]["name"]
    )

){

    $nombreImagen =
    $_FILES["imagen"]["name"];

    $rutaTemporal =
    $_FILES["imagen"]["tmp_name"];

    $rutaDestino =
    "../uploads/" .
    $nombreImagen;

    move_uploaded_file(

        $rutaTemporal,

        $rutaDestino

    );

    $sqlImagen =
    ", imagen='$nombreImagen'";
}

$sql = "UPDATE noticias

SET

titulo='$titulo',

descripcion='$descripcion'

$sqlImagen

WHERE id='$id'";

/*
ARREGLADO:
*/

$sql = "UPDATE noticias SET

titulo='$titulo',

descripcion='$descripcion'

$sqlImagen

WHERE id='$id'";

if(

    mysqli_query(
        $conexion,
        $sql
    )

){

    header(
        "Location: ../php/noticias.php"
    );

}else{

    echo "Error: " .
    mysqli_error(
        $conexion
    );
}

?>