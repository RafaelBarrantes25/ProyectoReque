<?php

session_start();

include "conexion.php";

$correo = $_POST["correo"];

$password = password_hash(

    $_POST["password"],

    PASSWORD_DEFAULT

);

$asociacion = $_POST["asociacion"];

$rol = "estudiante";

$sql_verificar = "SELECT * FROM usuarios
WHERE correo='$correo'";

$resultado_verificar = mysqli_query(
    $conexion,
    $sql_verificar
);

if(
    mysqli_num_rows(
        $resultado_verificar
    ) > 0
){

    die("El correo ya existe");
}

$sql = "INSERT INTO usuarios

(correo, password, rol, asociacion)

VALUES

('$correo', '$password', '$rol', '$asociacion')";

if(

    mysqli_query(
        $conexion,
        $sql
    )

){

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>

        <meta charset="UTF-8">

        <title>

            Registro exitoso

        </title>

    </head>

    <body>

        <h1>

            Cuenta creada correctamente 

        </h1>

        <br>

        <a href="../index.php">

            <button>

                Iniciar sesión

            </button>

        </a>

    </body>

    </html>

<?php

}else{

    echo "Error al registrar";
}

?>