<?php
// 1. Le avisamos al navegador que este archivo responderá estrictamente en formato JSON
header('Content-Type: application/json');

session_start();

include "conexion.php";

$correo = $_POST["correo"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $sql);
$usuario = mysqli_fetch_assoc($resultado);

if ($usuario) {
    if (password_verify($password, $usuario["password"])) {
        
        // El inicio de sesión es correcto, guardamos la sesión
        $_SESSION["correo"] = $usuario["correo"];
        $_SESSION["rol"] = $usuario["rol"];
        
        // Enviamos un JSON diciendo que todo salió bien (JavaScript se encargará de redirigir)
        echo json_encode([
            'status' => 'success'
        ]);
        exit();

    } else {
        // Contraseña incorrecta: enviamos el error en formato JSON
        echo json_encode([
            'status' => 'error',
            'message' => 'La contraseña es incorrecta.'
        ]);
        exit();
    }
} else {
    // Usuario no encontrado: enviamos el error en formato JSON
    echo json_encode([
        'status' => 'error',
        'message' => 'El correo electrónico no está registrado.'
    ]);
    exit();
}
?>