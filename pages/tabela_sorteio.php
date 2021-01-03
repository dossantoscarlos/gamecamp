
<?php

    $selecao = json_decode(file_get_contents(
        __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.
        'selecao.json'
    ),true);


    logMsg($selecao);
?>
    <form method='get' action='' class='form'>
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
    <style>
        .group{
            display:inline-flex;
        }
    </style>