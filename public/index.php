<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\Wallet;

function getUser(int $id, int $userId, int $balance){
    $user = new Wallet($id, $userId, $balance);
    $file = serialize($user);
    $file = json_encode($file);
    print_r($file);
}
getUser(1, 1, 15);