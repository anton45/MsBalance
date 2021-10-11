<?php

namespace MsBalance;

class WalletManager
{
    private int $iserId;
    private int $balance;
    private int $money;


    public function safetoFile(Wallet $Wallet)
    {
        $serializeUser = serialize($Wallet);
        $writeTofile = file_put_contents('./file.txt', $serializeUser);
        return $writeTofile;
    }
    /*    public function balance(int $userId, int $money): bool
       {

       }
      public function add(int $userId, int $money): bool
       {

       }
       public function delete(int $userId, int $money): bool
       {

       }
       public function moneyTransfer(int $userId, int $userId, int $money): bool
       {

       }
    */
}