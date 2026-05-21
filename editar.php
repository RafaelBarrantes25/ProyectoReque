<?php

session_start();

if(
    $_SESSION["rol"]
    != "administrador"
){

    die("Acceso denegado");
}

include "includes/conexion.php";

$id = $_GET["id"];

$sql = "SELECT * FROM noticias
WHERE id='$id'";

$resultado = mysqli_query(
    $conexion,
    $sql
);

$noticia = mysqli_fetch_assoc(
    $resultado
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>
        Editar noticia
    </title>

</head>

<body>

    <h1>
        Editar noticia
    </h1>

    <form
    action="includes/actualizar.php"
    method="POST">

        <input
        type="hidden"
        name="id"
        value="<?php
        echo $noticia['id'];
        ?>">

        <label>
            Título
        </label>

        <br>

        <input
        type="text"
        name="titulo"
        value="<?php
        echo $noticia['titulo'];
        ?>"
        required>

        <br><br>

        <label>
            Descripción
        </label>

        <br>

        <textarea
        name="descripcion"
        required><?php
        echo $noticia['descripcion'];
        ?></textarea>

        <br><br>

        <input
        type="submit"
        value="Actualizar">

    </form>

</body>
</html>
