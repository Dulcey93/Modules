<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');

    $res = (object) [
        "Clase_usuario"=> User::getUser(),
        "Clase_informacion"=> Info::getInfo()
    ];

    echo json_encode($res, JSON_PRETTY_PRINT);
    
?>