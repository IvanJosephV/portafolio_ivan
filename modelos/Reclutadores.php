<?php
//Incluir la conexion a la base de datos
require("../config/Conexion.php");

class Reclutadores 
{

	//metodo para insertar registros
    public function guardar($nombre,$email,$asunto,$mensaje)
    {
       
       $q="INSERT INTO reclutadores( nombre,email,asunto,mensaje) 
    VALUES ('$nombre','$email','$asunto','$mensaje')";

       //die($q);
       $rspta = ejecutarConsulta($q);//Ejecutar consulta
       return $rspta; 
   }

}

?>