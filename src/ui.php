<?php

function showMenu(){
    echo "\n--------Banco Azul--------\n";
    echo "[1] Consultar Saldo\n";
    echo "[2] Realizar um depósito\n";
    echo "[3] Realizar saque\n";
    echo "[4] Sair do banco\n";
}

function readName(){
    echo "Digite o nome do titular da conta: ";
    $name = trim(fgets(STDIN));
    return $name;
}


function readInput(){
    $choice = trim(fgets(STDIN));
    return $choice;
}
