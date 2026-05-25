<?php

session_start();

if(!isset($_SESSION["correo"])){

    header("Location: index.php");
}

include "includes/conexion.php";

$sql = "SELECT * FROM noticias
ORDER BY fecha DESC";

$resultado = mysqli_query(
    $conexion,
    $sql
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>

        Noticias

    </title>

</head>

<body>

    <h1>

        Noticias

    </h1>

    <a href="dashboard.php">

        <button>

            Volver al dashboard

        </button>

    </a>

    <br><br>

    <?php

    while(

        $fila =
        mysqli_fetch_assoc(
            $resultado
        )

    ){

    ?>

        <div
        style="
        border:1px solid #ccc;
        padding:15px;
        margin-bottom:20px;
        border-radius:10px;
        ">

            <h2>

                <?php

                echo $fila["titulo"];

                ?>

            </h2>

            <?php

            if(
                !empty(
                    $fila["imagen"]
                )
            ){

            ?>

                <img

                src="uploads/<?php
                echo $fila["imagen"];
                ?>"

                width="300">

                <br><br>

            <?php

            }

            ?>

            <p>

                <?php

                echo $fila["descripcion"];

                ?>

            </p>

            <small>

                Publicado:

                <?php

                echo date(

                    "d/m/Y",

                    strtotime(
                        $fila["fecha"]
                    )

                );

                ?>

            </small>

            <br><br>

            <?php

            if(
                $_SESSION["rol"]
                == "administrador"
            ){

            ?>

                <a
                href="editar.php?id=<?php
                echo $fila['id'];
                ?>">

                    <button>

                        Editar

                    </button>

                </a>

                <a
                href="includes/eliminar.php?id=<?php
                echo $fila['id'];
                ?>">

                    <button>

                        Eliminar

                    </button>

                </a>

            <?php

            }

            ?>

        </div>

    <?php

    }

    ?>

</body>
</html>