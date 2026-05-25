<?php

session_start();

if(
    $_SESSION["rol"]
    != "administrador"
){

    die("Acceso denegado");
}

include "conexion.php";

$titulo = $_POST["titulo"];

$descripcion =
$_POST["descripcion"];

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

$sql = "INSERT INTO noticias

(titulo, descripcion, imagen)

VALUES

('$titulo',
'$descripcion',
'$nombreImagen')";

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

    echo "Error";
}

?>