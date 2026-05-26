<?php

session_start();

if(
    $_SESSION["rol"]
    != "administrador"
){

    die("Acceso denegado");
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>

        Publicar noticia

    </title>
    <link
    rel="stylesheet"
    href="../css/PaginaPrincipal.css">

</head>

<body>

    <header class="barra-logo">

        <img
        src="../imagenes/logotecblanco.svg"
        alt="Logo TEC"
        height="65">

    </header>
    <div class="barra-horizontal-roja"></div>
    
    <h1>

        Nueva noticia

    </h1>

    <form

    action="../includes/guardar_noticia.php"

    method="POST"

    enctype="multipart/form-data">

        <label>

            Título

        </label>

        <br>

        <input

        type="text"

        name="titulo"

        required>

        <br><br>

        <label>

            Descripción

        </label>

        <br>

        <textarea

        name="descripcion"

        required>

        </textarea>

        <br><br>

        <label>

            Imagen

        </label>

        <br>

        <input

        type="file"

        name="imagen"

        accept="image/*">

        <br><br>

        <input

        type="submit"

        value="Publicar">

    </form>

    <br><br>

    <a href="noticias.php">

        <button>

            Volver a noticias

        </button>

    </a>

</body>
</html>