<?php 
    require_once './loading.php';

    $url = filter_input(INPUT_SERVER, 'REQUEST_URI');
    $routes = json_decode(file_get_contents('./route/routes.json'),true);
    $titulo; 
    $pagina; 
    $load = [];
    for($i = 0;  $i < count($routes['routes']); $i++){
        $route = $routes['routes'][$i];
        $parametro = explode('?', $url); 
        if ($route['uri'] == $url || $route['uri'] == $parametro[0]) { 
            $load = [
                'file' => $route['file'],
                'title' => $route['title'],
                'uri' => $route['uri']
            ];
        }                
    }

    if ($load == []){
        $titulo = "Welcome";
        $pagina = strtolower('Welcome.php');
    }else{
        $titulo = $load['title'];
        $pagina = $load['file'];
    }
   
    ?> 
    <html>
        <head>
            <title> <?=$titulo?></title>
            <?php include 'cssfile.php' ?>
        </head>
        <body>
            <?php
            if(file_exists(__DIR__.DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR.$pagina)){
            
                require __DIR__.DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR.$pagina;

            }
        ?>
            <?php include 'jsfile.php' ?>
        </body>
    </html>