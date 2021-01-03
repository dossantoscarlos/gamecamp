<html>
    <head>
        <title>
            Torneio GamerS
        </title>
    </head>
    <body>
        <?php 
               $url = $_SERVER['REQUEST_URI'];
               
               $routes = json_decode(file_get_contents('./route/routes.json'),true);

               $page= "";
               $URI= '';

                for($i = 0;  $i < count($routes['routes']); $i++){
                    $route = $routes['routes'][$i];
                    print_r($route['uri']);
                    
               }
                
               echo $page;
            //    if(file_exists("./pages/$page")){
            //        require("./pages/$page");
            //    }

        ?>
    </body>
</html>