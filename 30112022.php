<?php

class Account
{
    static $bankAccount;
    public $nameOfUser;

    function __construct($nameOfUser, $bankAccount=61_182)
    {
        $this->nameOfUser = $nameOfUser;
        $this->bankAccount = $bankAccount;
    }

    function increaseBankAccount ($digit)
    {
        $bankAccount = $this->bankAccount + $digit;
        $this->getBankAccount($bankAccount);
    }

    function decreaseBankAccount($digit)
    {
        $bankAccount = $this->bankAccount - $digit;
        $this->getBankAccount($bankAccount);
    }
    function getSumFrom($otherAccount, $digit)
    {
        $otherAccount->bankAccount -= $digit;
        $this->bankAccount += $digit;

        $this->getBankAccount($this->bankAccount);
    }

    function getBankAccount($bankAccount)
    {
        echo "The amount on your bank account mr $this->nameOfUser is - $bankAccount$ <br><br>"; 
    }
    function __destruct(){}
}

$bankAccountDaeYoung = new Account("DaeYoung");
$bankAccountDaeYoung->increaseBankAccount(25_000);
$bankAccountDaeYoung->increaseBankAccount(125_000);
$bankAccountDaeYoung->increaseBankAccount(1);

$bankAccountKim = new Account("Kim");
$bankAccountKim->increaseBankAccount(1_257);

$bankAccountDaeYoung->getSumFrom($bankAccountKim, 25_205);
?>