<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>

        AvisaTEC | Iniciar sesión

    </title>

    <link
    rel="stylesheet"
    href="../css/index.css">

</head>

<body>

    <header class="barra-logo">

        <img
        src="../imagenes/logotecblanco.svg"
        alt="Logo del Instituto Tecnológico de Costa Rica"
        height="65">

    </header>

    <div class="barra-horizontal-roja"></div>

    <h1 class="titulo">

        Iniciar sesión

    </h1>

    <br><br>

    <div id="globo-error" class="globo-oculto"></div>

    <form id="form-login" action="../includes/login.php" method="POST">

        <label for="correo" class="texto-vacio">Correo:</label>
        <br>
        <input type="email" id="correo" name="correo" placeholder="correo@estudiantec.cr" pattern="^[a-zA-Z0-9._%+-]+@estudiantec\.cr$" title="Por favor, ingresa un correo institucional válido (@estudiantec.cr)" required class="campo-vacio">

        <br><br>

        <label for="password" class="texto-vacio">Contraseña:</label>
        <br>
        <input type="password" id="password" name="password" minlength="8" required class="campo-vacio">

        <br><br>

        <input type="submit" value="Iniciar sesión" class="campo-vacio">

    </form>

    <br><br>


    <a
    href="registrar.php"
    class="texto-vacio">

        Crear cuenta

    </a>

    <div class="barra-fondo-roja"></div>

    <div class="barra-fondo-azul"></div>


    <script>
    document.getElementById('form-login').addEventListener('submit', async function(e) {
        e.preventDefault(); // Evita por completo que la página se recargue o se mueva
    
        const globo = document.getElementById('globo-error');
    
        // Ocultamos el globo si ya había uno abierto de un intento anterior
        globo.classList.remove('mostrar'); 

        const formData = new FormData(this);

        try {
            const respuesta = await fetch(this.action, {
                method: 'POST',
                body: formData
            });

            const resultado = await respuesta.json();

            if (resultado.status === 'error') {
                // 1. Le metemos el texto del error que mandó PHP
                globo.textContent = resultado.message;
            
                // 2. Le agregamos la clase para que aparezca flotando con la animación CSS
                globo.classList.add('mostrar');
            
                // 3. Programamos para que el globo se oculte solo en 4 segundos
                setTimeout(() => {
                    globo.classList.remove('mostrar');
                }, 4000);

            } else if (resultado.status === 'success') {
             // Si todo está bien, aquí SÍ lo dejamos pasar al sistema
             window.location.href = '../php/dashboard.php'; 
            }

        } catch (error) {
            globo.textContent = 'Hubo un problema al conectar con el servidor.';
            globo.classList.add('mostrar');
        }
    });
    </script>

</body>
</html>