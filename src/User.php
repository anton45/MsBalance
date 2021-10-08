<?php

namespace MsBalance;

class User{
    private int $id;
    private int $userid;
    private int $balance;


    public function __construct(int $id, int $userid, int $balance)
    {

        $this->id = $id;
        $this->userid = $userid;
        $this->balance = $balance;
    }

}