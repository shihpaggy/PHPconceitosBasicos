<?php

function exibeMensagem(string $mensagem){
    echo $mensagem.'<br>';
};

function saque(array $conta,float $valorSaque): array{
    if($valorSaque<=0||$valorSaque>=$conta['saldo']){
        exibeMensagem(mensagem: "Insira um valor válido");
    }else{
        $conta['saldo'] -= $valorSaque;
        exibeMensagem(mensagem: "Saque realizado");
    }
    return $conta;
}

function deposito(array $conta,float $valorDeposito): array{
    if($valorDeposito<=0){
        exibeMensagem(mensagem: "Insira um valor válido");
    }else{
        $conta['saldo'] += $valorDeposito;
        exibeMensagem(mensagem: "Deposito realizado");
    }
    return $conta;
}

function titularLetraMaiusculas(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}
// por fins didaticos, o valor de conta sera passada como referencia.
// numa situacao real, isso nao faz sentido.

// exibicao alternativa de html com php.
/*function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}*/
