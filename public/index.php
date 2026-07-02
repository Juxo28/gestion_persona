<?php 

require_once "../class/persona.php";


$persona1 = new Persona();

$persona1 ->nombre = "Julian";

$persona1 ->edad = 21 ;

$persona1 ->correo = "julianpalaciol@gmail.com";

$persona1->saludar();
