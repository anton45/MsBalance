<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\Wallet;
use MsBalance\WalletManager;

function getUser(int $id, int $userId, int $balance){
    $user = new Wallet($id, $userId, $balance);
    $manager = new WalletManager();
    print_r($manager);
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