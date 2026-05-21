<!DOCTYPE html>
<html>

<head>
    <title>Publicar noticia</title>
</head>


<body>

    <?php

    session_start();

    if(
        $_SESSION["rol"]
        != "administrador"
    ){

        die("Acceso denegado");
    }

    ?>

    <h1>
        Nueva noticia
    </h1>

    <form
    action="includes/guardar_noticia.php"
    method="POST">

        <label>Título</label>
        <br>

        <input
        type="text"
        name="titulo"
        required>

        <br><br>

        <label>Descripción</label>
        <br>

        <textarea
        name="descripcion"
        required>
        </textarea>

        <br><br>

        <input
        type="submit"
        value="Publicar">

    </form>

</body>
</html>
