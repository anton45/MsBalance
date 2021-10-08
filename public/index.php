<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\User;

function getUser(int $id, int $userid, int $balance){
    $user = new User($id, $userid, $balance);
    print_r($user);
}
getUser(1, 1, 15);