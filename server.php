<?php 
    include './loading.php';
    /** Servidor embutido do php **/
    $host = "localhost";
    $port = 8990;
    $path = ".";

    logMsg('Servidor iniciado');

    $result = System("php -S $host:$port -t $path", $log); 

    if (empty($result)) $result="Servidor parou !!!";  

    if ($log == 1) logMsg("{$result}" , 'error' );
    
?>