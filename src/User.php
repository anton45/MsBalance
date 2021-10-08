<?php

namespace MsBalance;

class User{
    private int $id;
    private int $userId;
    private int $balance;

    public function __construct(int $id, int $userId, int $balance)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->balance = $balance;
    }
/*    public function safeUser(int $id, int $userId, int $balance)
    {
        $arrayUser = [$id => $id, $userId => $userId, $balance => $balance];
        $json = json_encode($arrayUser);
        var_dump($arrayUser);
    }
*/
}

