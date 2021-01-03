<div class='form'>
<h1>
    Informe a quantidade de jogadores
</h1>

<form method="get" action=<?php filter_input(INPUT_SERVER, 'PHP_SELF') ?>>
    <div class='group'>
        <label>Nome do Jogo</label> 
        <br/>
        <input type="text" name="nome_jogo" />
    </div>
    <div>
        <label>Quantidade de Rodada</label>
        <br/>
        <input type="text" name="rodadas" />
    </div>
    <div class='group'>
        <label>Quantidade de Jogadores </label>
        <br />
        <input type="number" name="qnt_jogadores" id="qnt_jogadores" />
    </div>
    <div>
        <br/>
        <button>Prosseguir</button> 
    </div>
</form>
</div>
<?php 
    require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'selecao_jogador.php'; 
?>
