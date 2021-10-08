<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\User;

function getUser(int $id, int $userId, int $balance){
    $user = new User($id, $userId, $balance);
    $file = serialize($user);
    $file = json_encode($file);
    print_r($file);
}
getUser(1, 1, 15);