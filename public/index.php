<?php

require_once "../class/persona.php";

$persona1 = new Persona("Julian", 21, "julianpalaciol@gmail.com", "Latorre");

$persona2 = new Persona("David", 21, "davidlatorre@gmail.com", "Palacio");

echo $persona1->Saludar();
echo $persona2->Saludar();

require_once "../class/moto.php";

$moto1 = new moto("Tvs Raider Racing Edition", "2027", "Azul Petroleo", "125");
$moto2 = new moto("Hero Hunk 125R", "2027", "Negro", "125");

echo $moto1->ficha_tecnica();
echo $moto2->ficha_tecnica();

require_once "../class/estudiante.php";

$estudiante1 = new Estudiante("Valeria", 21, "valatorre@gmail.com", "Palacio");

echo $estudiante1 -> Saludar();