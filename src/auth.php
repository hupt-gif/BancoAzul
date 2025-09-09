<?php
function loadUsers(){
    $fileUsers = 'users.json';
    if(!file_exists($fileUsers)) return [];
    $content = file_get_contents($fileUsers);
    return json_decode($content, true) ?? [];
} 

function saveUsers($users){
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
}

function registerUsers($name,$password){
    $users = loadUsers();

    foreach($users as $user){
        if ($user['name' === $name]){
            echo "Este usuário já está cadastrado.\n";
            echo "================================\n";
            return false;
        }
    }

    $users[] = [
        'name'=> $name,
        'password' => $password,
        'Bank balance' => 0.0
    ];

    saveUsers($users);
    echo "Usuário cadastrado com sucesso.\n";
    echo "===============================\n";
    return true;
}

function authUser($name,$password){
    $users = loadUsers();

    foreach($users as $user){
        if($user['name'] === $name && $user['password'] === $password){
            echo "Login realizado.\n";
            echo "================\n";
            return $user;
        }
    }

    echo "ERROR: Nome ou senha inválidos.\n";
    echo "===============================\n";
    return null;
}
