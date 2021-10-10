<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\Wallet;
use MsBalance\WalletManager;

function getUser(int $id, int $userId, int $balance){
    $user = new Wallet($id, $userId, $balance);
    $serializeUser = serialize($user);
    $writeTofile = file_put_contents('./file.txt', $serializeUser);
    print_r($writeTofile);
}
/*
function openFile(){
    $open = new WalletManager();

    var_dump($open->safetoFile);
}

$file = file_get_contents('./file.txt');

function openFile($file){
    print_r($file);
}
openFile($file);
*/
getUser(1, 1, 15);