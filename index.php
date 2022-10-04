<?php
    session_start();
    define('APP',__DIR__);

    //configuració entorn
    require 'config.php';
    require 'src/router.php';
    require 'src/routes.php';
    //enrutament
    $controlador = getRouter($routes);

    require 'src/controllers/'.$controlador.'.php';
    //crida al controlador

