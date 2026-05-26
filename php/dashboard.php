<?php
session_start();

if(!isset($_SESSION["correo"])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>AvisaTEC</title>
    <link rel="stylesheet" href="../css/PaginaPrincipal.css">
</head>

<body>

<!-- HEADER -->
<header class="barra-logo">
    <img src="../imagenes/logotecblanco.svg" alt="Logo TEC" height="65">
</header>

<div class="barra-horizontal-roja"></div>

<br><br>

<h1 id="titulo">AvisaTEC</h1>

<p>
    Bienvenido,
    <?php
        $partes = explode("@", $_SESSION["correo"]);
        echo $partes[0];
    ?>
</p>

<!-- CALENDARIO -->
<div class="calendar">

    <div class="header" id="calendar-month">
        Cargando...
    </div>

    <div class="weekdays">
        <div style="color: #0066cc;">Sem</div>
        <div>Lu</div>
        <div>Ma</div>
        <div>Mi</div>
        <div>Ju</div>
        <div>Vi</div>
        <div>Sa</div>
        <div>Do</div>
    </div>

    <div class="days" id="calendar-days"></div>

</div>

<br><br>

<!-- BOTONES -->
<a href="noticias.php">
    <button>Ver noticias</button>
</a>

<?php if($_SESSION["rol"] == "administrador"){ ?>
    <br><br>
    <a href="publicar.php">
        <button>Publicar noticia</button>
    </a>
<?php } ?>

<br><br>

<!-- ASOCIACIONES -->
<h3>Lista de asociaciones:</h3>

<ul id="listaAsociaciones">
    <li><button type="button">Asociación A</button></li>
    <li><button type="button">Asociación B</button></li>
    <li><button type="button">Asociación C</button></li>
</ul>

<br>

<!-- FOOTER -->
<footer>

    <div class="barra-horizontal-roja"></div>

    <p>
        Copyright libre - Puedes copiar y usar este sitio web sin restricciones.
    </p>

    <button type="button">
        <img src="../imagenes/News.png" height="50" style="vertical-align: middle;">
        Notas de actualización
    </button>

    <br><br>

    <button type="button">
        <img src="../imagenes/Perfil_PorDefecto.png" height="50" style="vertical-align: middle;">
        Datos Personales
    </button>

    <br><br>

    <a href="../includes/logout.php">
        <button>Cerrar sesión</button>
    </a>

</footer>

<!-- JS CALENDARIO -->
<script>

function generarCalendario(){

    const fechaActual = new Date();

    const ano = fechaActual.getFullYear();
    const mes = fechaActual.getMonth();
    const diaHoy = fechaActual.getDate();

    const opcionesMes = {
        month: 'long',
        year: 'numeric'
    };

    document.getElementById('calendar-month').innerText =
        fechaActual.toLocaleDateString('es-ES', opcionesMes);

    // Lunes = 0 ... Domingo = 6
    let primerDiaMes = new Date(ano, mes, 1).getDay();
    primerDiaMes = (primerDiaMes + 6) % 7;

    const totalDiasMes = new Date(ano, mes + 1, 0).getDate();

    const contenedor = document.getElementById('calendar-days');
    contenedor.innerHTML = "";

    // =========================
    // SEMANA BASE (AJUSTE)
    // 25 mayo 2026 = semana 14
    // =========================
    const fechaBase = new Date(2026, 4, 25);
    const semanaBase = 14;

    const msDia = 24 * 60 * 60 * 1000;

    const primerDiaMesFecha = new Date(ano, mes, 1);

    let semanaActual =
        semanaBase +
        Math.floor((primerDiaMesFecha - fechaBase) / msDia / 7);

    // GRID
    let columna = 2; // 1 = Sem, 2 = Lunes

    // CELDA SEMANA
    let celdaSemana = document.createElement('div');
    celdaSemana.classList.add('semana-col');
    celdaSemana.innerText = "S" + semanaActual;
    contenedor.appendChild(celdaSemana);

    // ESPACIOS VACÍOS
    for(let i = 0; i < primerDiaMes; i++){
        const empty = document.createElement('div');
        contenedor.appendChild(empty);
        columna++;
    }

    // DÍAS
    for(let dia = 1; dia <= totalDiasMes; dia++){

        if(columna === 9){
            semanaActual++;

            celdaSemana = document.createElement('div');
            celdaSemana.classList.add('semana-col');
            celdaSemana.innerText = "S" + semanaActual;
            contenedor.appendChild(celdaSemana);

            columna = 2;
        }

        const celdaDia = document.createElement('div');
        celdaDia.innerText = dia;

        if(dia === diaHoy){
            celdaDia.classList.add('today');
        }

        contenedor.appendChild(celdaDia);

        columna++;
    }
}

generarCalendario();

</script>

</body>
</html>