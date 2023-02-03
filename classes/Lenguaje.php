<?php
declare(strict_types = 1);

class Lenguaje{
    public $nombre;
    public $imagen;
    public $imagenComprimida;
    public $url;
    public $categoria;
    function __construct($nombre, $imagen,$imagenComprimida,$url,$categoria)
    {
        $this->nombre=$nombre;
        $this->imagen=$imagen;
        $this->imagenComprimida = $imagenComprimida;
        $this->url = $url;
        $this->categoria = $categoria;
        
    }

        
    function getNombre(){
        echo $this->nombre;
    }
    function getImagen(){
        echo $this->imagen;
    }
    function getImagenComprimida(){
        echo $this->imagenComprimida;
    }

    function getUrl(){
        echo $this->url;
    }
}



?>