<?php
    include 'loading.php';
?>
<html>
    <head>
        <title>
            Torneio GamerS
        </title>
    </head>
    <body>
        <main>
        <?php 
            $url = $_SERVER['REQUEST_URI'];
         

            $routes = json_decode(file_get_contents('./route/routes.json'),true);
            $route = [];
            
            for($i = 0;  $i < count($routes['routes']); $i++){
                if ($url === $routes['routes'][$i]["uri"]){
                    $route = $routes['routes'][$i]; 
                    break;
                }

                logMsg(json_encode($route, true));
            }
            

            if(file_exists($route['file'])){
                require($route['file']);
                logMsg($route['file']);
            }

        ?>
        </main>
    </body>
</html>