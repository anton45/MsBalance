<?php

namespace MsBalance;

class User{
    private int $idUser;
    private int $accNumber;
    private int $balance;
    private string $name;

    public function __construct($idUser, $accNumber, $balance, $name)
    {

        $this->idUser = $idUser;
        $this->accNumber = $accNumber;
        $this->balance = $balance;
        $this->name = $name;
    }

}