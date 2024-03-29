<?php

function logMsg( $msg, $level = 'info', $file = './logs/main.log' )
{
    // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
    $levelStr = '';
 
    // verifica o nível do log
    switch ( $level )
    {
        case 'info':
            // nível de informação
            $levelStr = 'INFO';
            break;
 
        case 'warning':
            // nível de aviso
            $levelStr = 'WARNING';
            break;
 
        case 'error':
            // nível de erro
            $levelStr = 'ERROR';
            break;
    }
 
    // data atual
    $date = date( 'Y-m-d H:i:s' );
 
    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha

    if ($levelStr === 'INFO')
        $msg = sprintf( "[%s] [%s]:     %s%s", $date, $levelStr, $msg, PHP_EOL );
    elseif($levelStr === 'WARNING')
        $msg = sprintf( "[%s] [%s]:     %s%s", $date, $levelStr, $msg, PHP_EOL );
    elseif($levelStr === 'ERROR')
        $msg = sprintf( "[%s] [%s]:    %s%s", $date, $levelStr, $msg, PHP_EOL );
 
    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );
}
?>