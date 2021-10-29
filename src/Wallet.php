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

    public function safetoFile(array $stingarrayuserWallet) {
        $writeTofile = file_put_contents('./file.txt', $stingarrayuserWallet);
        return $writeTofile;
    }
    public function serialize(int $id, int $userId, int $balance) {
        $arrayuserWallet = ['id' => $id, 'userId' => $userId, 'balance' => $balance];
        foreach ($arrayuserWallet as $key => $value) {
            $stingarrayuserWallet[] = $key . '=' . $value . ';' . ' ';
        }
        return $stingarrayuserWallet;
    }
    public function openFile(string $fileRoute) {
        $getFile = file_put_contents($fileRoute);

    }

/*    public function safeUser(int $id, int $userId, int $balance)
    {
        $arrayUser = [$id => $id, $userId => $userId, $balance => $balance];
        $json = json_encode($arrayUser);
        var_dump($arrayUser);
    }
*/
}

