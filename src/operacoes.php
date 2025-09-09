<?php
function deposit(&$account,$value){
    if($value > 0){
        $account['Bank balance'] += $value;
        echo "Depósito de R$ $value realizado com sucesso.\n";
    } else {
        echo "ERROR: Valor de depósito inválido.\n";
    }
}

function withdraw(&$account,$value){
    if($value > 0 && $value <= $account['Bank balance']){
        $account['Bank balance'] -= $value;
        echo "Saque de R$ $value realizado com sucesso.\n";
    }else {
        echo "ERROR: Saque negado. Verifique o saldo\n";
    }
}

function showBalance($account){
    echo "{$account['Titular']}. Saldo atual: R$ " . number_format($account['Bank balance'],2,',','.') . "\n";
    //Formatar o saldo para o padrão brasileiro.
}