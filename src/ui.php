<?php

function showMenu(){
    echo "[1] Fazer login\n";
    echo "[2] Cadastrar nova conta\n";
    echo "[3] Sair do banco\n";
    echo "Selecione a opção desejada: ";
}

function bankMenuUser(){
    while(true){
        echo "=======================\n";
        echo "[1] Consultar saldo.\n";
        echo "[2] Realizar um depósito.\n";
        echo "[3] Realizar saque.\n";
        echo "[4] Sair do banco.\n";

        $choice = readInput();
        
        switch($choice){
            case 1:
                showBalance($user);
                break;
            case 2:
                echo "Digite o valor do depósito R$";
                $value = (float) readInput();
                deposit($user,$value);
                break;
            case 3:
                echo "Digite o valor do saque R$";
                $value = (float) readInput();
                withdraw($user,$value);
                break;
            case 4:
                echo "Fechando o app...";
                sleep(2);
                exit;
        default:
            echo "Opção inválida. \n";
     }
    }
}

/*function readName(){
    echo "Digite o nome do titular da conta: ";
    $name = trim(fgets(STDIN));
    return $name;
}*/ //Função descontinuada.


function readInput(){
    $choice = trim(fgets(STDIN));
    return $choice;
}
