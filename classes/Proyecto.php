<?php
class Proyecto{

    private $nombre;
    private $imagen;
    private $descripcion;
    private $url;

    function __construct(string $nombre, string $imagen, string $descripcion,string $url)
    {
        $this->nombre=$nombre;
        $this->imagen=$imagen;
        $this->descripcion=$descripcion;
        $this->url=$url;
    }

    function getNombre(){
        return $this->nombre;
    }
    function getImagen()
    {
        return $this->imagen;

    }

    function getDescripcion()
    {
        return $this->descripcion;

    }

    function getUrl()
    {
        return $this->url;

    }

  

}








?>