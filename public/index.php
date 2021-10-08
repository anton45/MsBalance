<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\User;

function getUser(int $id, int $userId, int $balance){
    $user = new User($id, $userId, $balance);
    print_r($user);
}
getUser(1, 1, 15);