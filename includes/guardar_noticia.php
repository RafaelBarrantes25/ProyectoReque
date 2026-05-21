<?php

include "conexion.php";

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];

$sql = "INSERT INTO noticias
(titulo, descripcion)

VALUES

('$titulo', '$descripcion')";

if(mysqli_query($conexion, $sql)){

    echo "Noticia publicada";

}else{

    echo "Error";
}

?>
