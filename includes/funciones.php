<?php


function incluirTemplate($nombre,$inicio =false){
    include __DIR__ . '/templates/'. $nombre .'.php';
}
?>