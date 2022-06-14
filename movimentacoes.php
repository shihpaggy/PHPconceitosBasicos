<?php

require_once 'funcoes.php';
require_once 'contaCorrente.php';

//adiciona conta
$contasCorrentes[44444444444] = [
    'titular' => "claudia",
    'saldo' => 30
];

// movimenta conta
$contasCorrentes[33333333333] = saque(conta: $contasCorrentes[33333333333],valorSaque: 500);
$contasCorrentes[44444444444] = deposito(conta: $contasCorrentes[44444444444],valorDeposito: 500);

// altera titular da conta
titularLetraMaiusculas($contasCorrentes[44444444444]);

//remove contas
unset($contasCorrentes[12345678910]);

//exibe conta
/*echo "<ul>";
foreach($contasCorrentes as $cpf => $conta){
    //['titular' => $titular, 'saldo' => $saldo] = $conta;
    //exibeMensagem(mensagem: "$cpf $titular $saldo");
    exibeConta($conta);
}
echo "</ul>";*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
            <dt>
                <?php echo $conta['titular'];?> - <?= $cpf ?>
            </dt>
            <dt>
                Saldo: <?php echo $conta['saldo']; ?>
            </dt>
        <?php } ?>
    </dl>
</body>
</html>
