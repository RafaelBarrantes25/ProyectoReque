<?php

include "includes/conexion.php";

$sql = "SELECT * FROM noticias";

$resultado = mysqli_query(
    $conexion,
    $sql
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Noticias</title>
</head>

<body>

    <h1>
        Noticias
    </h1>

    <?php

    while(
        $fila = mysqli_fetch_assoc(
            $resultado
        )
    ){

    ?>

        <hr>

        <h2>
            <?php
            echo $fila["titulo"];
            ?>
        </h2>

        <p>
            <?php
            echo $fila["descripcion"];
            ?>
        </p>

    <?php

    }

    ?>

    <a href="editar.php?id=<?php
    echo $fila['id'];
    ?>">
        Editar
    </a>

    <a href="includes/eliminar.php?id=<?php
    echo $fila['id'];
    ?>">
        Eliminar
    </a>

</body>
</html>
