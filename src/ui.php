<?php

function showMenu(){
    echo "\n--------Banco Azul--------\n";
    echo "[1] Consultar Saldo\n";
    echo "[2] Realizar um depósito\n";
    echo "[3] Transferência entre contas\n";
    echo "[4] Realizar saque\n";
    echo "[5] Sair do banco\n";
}

function readName(){
    $name = trim(fgets(STDIN));
    return $name;
}


function readInput(){
    $choice = trim(fgets(STDIN));
    return $choice;
}
