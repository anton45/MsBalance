<?php

namespace MsBalance;

class WalletManager
{
    private int $iserId;
    private int $balance;
    private int $money;


    public function safetoFile()
    {
        $file = file_get_contents(file.txt);
        print_r($file);
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