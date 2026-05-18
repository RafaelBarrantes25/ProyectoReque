<?php

include "conexion.php";

$correo = $_POST["correo"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios
WHERE correo='$correo'";

$resultado = mysqli_query(
    $conexion,
    $sql
);

$usuario = mysqli_fetch_assoc(
    $resultado
);

if($usuario){

    if(
        password_verify(
            $password,
            $usuario["password"]
        )
    ){

        echo "Login correcto";

    }else{

        echo "Contraseña incorrecta";
    }

}else{

    echo "Usuario no encontrado";
}

?>