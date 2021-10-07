<?php

require __DIR__ . '/../vendor/autoload.php';

use MsBalance\User;

function getUser($idUser, $accNumber, $Balance){
    $User = new User();
    $User->idUser = $idUser;
    $User->accNumber = $accNumber;
    $User->Balance = $Balance;
    print_r($User);
}
getUser(1, 1, 15);