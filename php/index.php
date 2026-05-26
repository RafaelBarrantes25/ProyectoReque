<!DOCTYPE html>
<html>

<head>
    <title>AvisaTEC</title>
</head>

<body>

    <img
    src="imagenes/logoTecAzul.webp"
    alt="Logo del Instituto Tecnológico de Costa Rica"
    height="65">

    <h1>Iniciar sesión</h1>

    <form action="includes/login.php" method="POST">

        <label>Correo:</label>
        <br>

        <input
        type="email"
        name="correo"
        placeholder="correo@estudiantec.cr"
        required>

        <br><br>

        <label>Contraseña:</label>
        <br>

        <input
        type="password"
        name="password"
        minlength="8"
        required>

        <br><br>

        <input type="submit" value="Iniciar sesión">

    </form>

    <br><br>

    <a href="registrar.php">
        Crear cuenta
    </a>

</body>
</html>