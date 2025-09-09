<?php
function deposit(&$user,$value){
    if($value > 0){
        $user['Bank balance'] += $value;
        echo "Depósito de R$$value, realizado com sucesso.\n";
    } else {
        echo "ERROR: Valor de depósito inválido.\n";
    }
}

function withdraw(&$user,$value){
    if($value > 0 && $value <= $user['Bank balance']){
        $user['Bank balance'] -= $value;
        echo "Saque de R$$value, realizado com sucesso.\n";
    }else {
        echo "ERROR: Saque negado. Verifique o saldo\n";
    }
}

function showBalance($user){
    echo "Saldo atual: R$" . number_format($user['Bank balance'],2,'.',',') . "\n";//Formata o saldo para o padrão brasileiro.
}