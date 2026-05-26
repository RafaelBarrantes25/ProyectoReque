<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>

        AvisaTEC | Crear cuenta

    </title>

    <link
    rel="stylesheet"
    href="../css/registrar.css">

</head>

<body>

    <header class="barra-logo">

        <img
        src="../imagenes/logotecblanco.svg"
        alt="Logo TEC"
        height="65">

    </header>

    <div class="barra-horizontal-roja"></div>

    <h1 class="titulo">

        Crear cuenta

    </h1>
    <h1 class="titulo">Miembro de una junta directiva de una asociación</h1>

    <br><br>

    <form
    action="../includes/registro.php"
    method="POST">

        <label
        class="texto-vacio">

            Correo:

        </label>

        <br>

        <input
        type="email"
        name="correo"
        placeholder="correo@estudiantec.cr"
        required
        class="campo-vacio">

        <br><br>

        <label
        class="texto-vacio">

            Contraseña:

        </label>

        <br>

        <input
        type="password"
        name="password"
        minlength="8"
        required
        class="campo-vacio">

        <br><br>

        <label
        class="texto-vacio">

            Asociación:

        </label>

        <br>

        <select
        name="asociacion"
        class="campo-vacio">

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
        value="Crear cuenta"
        class="campo-vacio">

    </form>

    <br><br>

    <a
    href="index.php"
    class="texto-vacio">

        Ya tengo una cuenta

    </a>
    <a href="registroEstRegular.php" class="texto-vacio">

        Soy un estudiante regular

    </a>

    <div class="barra-fondo-roja"></div>

    <div class="barra-fondo-azul"></div>

</body>
</html>