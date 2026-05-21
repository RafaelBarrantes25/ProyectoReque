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

$sql = "UPDATE noticias

SET

titulo='$titulo',

descripcion='$descripcion'

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

    echo "Error";
}

?>
