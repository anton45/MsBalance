<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\Wallet;
use MsBalance\WalletManager;

function getUser(int $id, int $userId, int $balance){
    $user = new Wallet($id, $userId, $balance);
    print_r($file);
}
$openFile = new WalletManager();
print_r($openFile);
getUser(1, 1, 15);