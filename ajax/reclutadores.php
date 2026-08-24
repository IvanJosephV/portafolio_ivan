<?php 


require_once "../modelos/Reclutadores.php";


$reclutadores=new Reclutadores();

//-------------------------------------------------------------------------------//
$op = isset($_GET["op"]) ? limpiarCadena($_GET["op"]) : "";// $_GET
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$asunto=isset($_POST["asunto"])? limpiarCadena($_POST["asunto"]):"";
$mensaje=isset($_POST["mensaje"])? limpiarCadena($_POST["mensaje"]):"";

switch ($op){

	case 'guardar':
        $rspta=$reclutadores->guardar($nombre,$email,$asunto,$mensaje);
        echo $rspta ? "Registro exitoso" : "No se pudo registrar";
     
    break;

    }
?>