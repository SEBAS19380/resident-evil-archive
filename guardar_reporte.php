<?php

$conexion = new mysqli("localhost","root","","umbrella");

if($conexion->connect_error){
    die("Error de conexión");
}

$nombre = $_POST["nombre"];
$ubicacion = $_POST["ubicacion"];
$tipo = $_POST["tipo"];
$gravedad = $_POST["gravedad"];
$detalles = $_POST["detalles"];

$amenazas = "";

if(isset($_POST["amenazas"])){
    $amenazas = implode(", ", $_POST["amenazas"]);
}

$sql = "INSERT INTO reportes(nombre,ubicacion,tipo,amenazas,gravedad,detalles)
VALUES('$nombre','$ubicacion','$tipo','$amenazas','$gravedad','$detalles')";

if($conexion->query($sql)){
    echo "Reporte guardado correctamente";
}else{
    echo "Error al guardar";
}

$conexion->close();

?>