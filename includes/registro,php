<?php

include "conexion.php";

$correo = $_POST["correo"];
$password = $_POST["password"];
$asociacion = $_POST["asociacion"];

$passwordCifrada = password_hash(
    $password,
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO usuarios
(correo, password, asociacion)

VALUES

('$correo',
'$passwordCifrada',
'$asociacion')";

if(mysqli_query($conexion, $sql)){

    echo "Usuario registrado";

}else{

    echo "Error";
}

?>
