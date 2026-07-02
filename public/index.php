<?php 

require_once "../class/persona.php";


$persona1 = new Persona();
$persona1 ->nombre = "Julian";
$persona1 ->edad = 21 ;
$persona1 ->correo = "julianpalaciol@gmail.com";
$persona1 ->apellido = "Latorre";

$persona2 = new Persona();
$persona2 ->nombre = "David";
$persona2 ->edad = 21 ;
$persona2 ->correo = "davidlatorre@gmail.com";
$persona2 ->apellido = "Palacio";

echo $persona1->saludar();
echo $persona2->saludar();
