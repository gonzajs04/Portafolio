<?php

class Certificado{
   private $nombreCertificado;
   private $imagenCertificado;

    function __construct($nombreCertificado, $imagenCertificado)
    {
        $this->nombreCertificado = $nombreCertificado;
        $this->imagenCertificado = $imagenCertificado;
    }

    public function getNombreCertificado(){
        return $this->nombreCertificado;
    }
    public function getImagenCertificado(){
        return $this->imagenCertificado;
    }
   

}



?>