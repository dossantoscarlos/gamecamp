<?php 
    $qnt = filter_input(INPUT_GET, 'qnt_jogadores');
    $nome_jogo = filter_input(INPUT_GET, 'nome_jogo');
    $rodadas = filter_input(INPUT_GET, 'rodadas');

    $file = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'database'.
            DIRECTORY_SEPARATOR."selecao.json";

    $jogador =  [
        "jogadores" => [
            'qnt_jogadores' => $qnt,
            'nome_jogo' => $nome_jogo,
            'rodadas' => $rodadas
        ]
    ];
    file_put_contents($file, json_encode($jogador), FILE_TEXT);

    header('location: /sorteio');
?>