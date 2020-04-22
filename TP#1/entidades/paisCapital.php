<?php

class paisCapital extends pais
{   
    public $capital;

    function __construct($nombre,$capital,$continente,$idioma)
    {   parent::__construct($nombre,$continente,$idioma);
        $this->capital=$capital;
    }
    

    public function getCapital()
    {
        return $this->capital;
    }

    public function mostrar()
    {
        return $this->capital;
    }
    public static function mostrarPaisRegion($paisCapital)
    {
        return $paisCapital->mostrar();
    }
}