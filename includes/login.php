<?php

session_start();

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

        $_SESSION["correo"] =

        $usuario["correo"];

        $_SESSION["rol"] =

        $usuario["rol"];

        header(

            "Location: ../php/dashboard.php"

        );

    }else{

        echo "Contraseña incorrecta";
    }

}else{

    echo "Usuario no encontrado";
}

?>