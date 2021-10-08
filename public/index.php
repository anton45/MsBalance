<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\User;

function getUser(int $idUser, int $accNumber, int $balance, string $name){
    $user = new User($idUser, $accNumber, $balance, $name);
    print_r($user);
}
getUser(1, 1, 15, 'Anton');