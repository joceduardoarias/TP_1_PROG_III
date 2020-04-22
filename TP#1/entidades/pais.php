<?php


class pais{

    public $nombre;
    public $continente;
    public $idioma;
    //Constructor
    function __construct($nombre,$continente,$idioma){
        $this->nombre = $nombre;
        $this->continente = $continente;
        $this->idioma = $idioma;
    }

    //Getter
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getContinente()
    {
        return $this->continente;
    }

    public function getIdioma()
    {
        return $this->idioma;
    }
   
    public function mostrarDatosPais()
    {
        echo $this->nombre.$this->continente.$this->idioma;
    }
    
}
