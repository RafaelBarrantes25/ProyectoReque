<!DOCTYPE html>
<html>

<head>
    <title>AvisaTEC</title>
</head>

<body>

    <img
    src="imagenes/logoTecAzul.webp"
    alt="Logo TEC"
    height="65">

    <h1>Crear cuenta</h1>

    <form action="includes/registro.php" method="POST">

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

        <label>Asociación:</label>
        <br>

        <select name="asociacion">

            <option value="computacion">
                Computación
            </option>

            <option value="materiales">
                Materiales
            </option>

        </select>

        <br><br>

        <input
        type="submit"
        value="Crear cuenta">

    </form>

    <br><br>

    <a href="index.php">
        Ya tengo una cuenta
    </a>

</body>
</html>