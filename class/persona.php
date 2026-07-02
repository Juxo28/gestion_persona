<?php

class persona
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function Saludar()
        {
        echo "Hola mi nombre es: ".$this->nombre. " " .$this->apellido;
    }
}
