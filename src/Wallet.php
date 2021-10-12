<?php

namespace MsBalance;

class Wallet{
    private int $id;
    private int $userId;
    private int $balance;


    public function __construct(int $id, int $userId, int $balance)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->balance = $balance;

    }
    public function safetoFile(int $id, int $userId, int $balance) {
        $arrayuserWallet = [$id, $userId, $balance];
        $serializeUser = serialize($arrayuserWallet);
        $writeTofile = file_put_contents('./file.txt', $serializeUser);
        return $writeTofile;
    }

/*    public function safeUser(int $id, int $userId, int $balance)
    {
        $arrayUser = [$id => $id, $userId => $userId, $balance => $balance];
        $json = json_encode($arrayUser);
        var_dump($arrayUser);
    }
*/
}

