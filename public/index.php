<?php

require_once "../class/persona.php";

$persona1 = new persona("Julian", 21, "julianpalaciol@gmail.com", "Latorre");

$persona2 = new persona("David", 21, "davidlatorre@gmail.com", "Palacio");

echo $persona1->Saludar();
echo $persona2->Saludar();