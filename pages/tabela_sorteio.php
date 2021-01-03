
<?php

    $selecao = json_decode(file_get_contents(
        __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.
        'selecao.json'
    ),true);


    logMsg($selecao);
?>
    <form method='post' action='<?php filter_input(INPUT_SERVER, 'PHP_SELF')?>' class='form'>
<H1> Informe o nome dos  Jogadores </h1>

<?php
    for ($i = 0; $i< $selecao['jogadores']['qnt_jogadores']; $i++) {
?>
    
    <div>
        <div class='group'>
            <div style='display:block'>
                <label> Nome do Jogador </label> 
                <br/>
                <input  type="text" name="nome_jogador[]" />
            </div>
        </div>
        <div class='group'> 
            <div style='display:block'>  
                <label>Apelido</label>
                <br/>
                <input type="text" name='apelido[]' />
            </div> 
        </div>
    </div>
<?php 
    } 
?>
    <Button>Embaralhar</button>
</form>
<?php 
    $nomeJogador = filter_input_array(INPUT_POST, 'nome_jogador');
    
    print_r($nomeJogador);

    logMsg($nomeJogador); 
?>
 <style>
        .group{
            display:inline-flex;
        }
    </style>