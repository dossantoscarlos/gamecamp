<?php 
    include './loading.php';
    /** Servidor embutido do php **/
    $host = "localhost";
    $port = 8990;
    $path = ".";

    logMsg("Servido iniciado");

    System("php -S $host:$port -t $path", $log); 
    
    if ($log == 1) logMsg("Servidor caiu" , 'error' );
