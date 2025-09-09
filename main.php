<?php
declare(strict_types=1);

require_once 'src/ui.php';
$name = readName("Digite o nome do titular da conta: "); //Definido antes de banco para carregar corretamente.
require_once 'src/banco.php';
require_once 'src/operacoes.php';

$choice = 0;

echo "-----------------------\n";
echo "Bem-vindo ao Banco Azul\n";
echo "-----------------------\n";

while(true){
    showMenu();
    $choice = readInput();
    
    switch($choice){
        case 1:
            showBalance($account);
            break;
        case 2:
            echo "Digite o valor do depósito R$ ";
            $value = (float) readInput();
            deposit($account,$value);
            break;
        case 3:
            echo "Digite o valor do saque R$ ";
            $value = (float) readInput();
            withdraw($account,$value);
            break;
        case 4:
            echo "Fechando o app...";
            sleep(2);
            exit;
        default:
            echo "Opção inválida. \n";
    }
}