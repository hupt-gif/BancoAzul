<?php
declare(strict_types=1);
error_reporting(0);

require_once 'src/ui.php';
//$name = readName("Digite o nome do titular da conta: "); //Verificação descontinuada.
require_once 'src/operacoes.php';
require_once 'src/auth.php';

$choice = 0;

echo "-----------------------\n";
echo "Bem-vindo ao Banco Azul\n";
echo "-----------------------\n";

while(true){
    showMenu();
    $choice = readInput();
    
    switch($choice){
        case 1:
            echo 'Nome de usuário: ';
            $name = readInput();
            echo 'Digite uma senha: ';
            $password = readInput();

            $user = authUser($name,$password);
            if($user){
                bankMenuUser($user); //Função do menu de seleção de operações bancárias
            }
            break;
        case 2:
            echo 'Escolha um nome de usuário: ';
            $name = readInput();
            echo 'Escolha uma senha: ';
            $password = readInput();
            registerUsers($name,$password);
            break;
        case 3:
            echo "Fechando o app...";
            sleep(2);
            exit;
        default:
            echo "Opção inválida. \n";
    }
}