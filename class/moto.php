<?php

class moto
{
    public $carroceria;
    public $modelo;
    public $color;
    public $CC;

    public function __construct($carroceria,$modelo,$color,$CC)
    {
        $this->carroceria=$carroceria;
        $this->modelo=$modelo;
        $this->color=$color;
        $this->CC=$CC;
    }

    public function ficha_tecnica()
        {
        return "La moto es : ".$this->carroceria. "<br>". 
        " el modelo es " .$this->modelo . "<br>".
        " el color es: " .$this->color. "<br>".
        " y el CC es: " .$this->CC."<br><br>";
    }
}
