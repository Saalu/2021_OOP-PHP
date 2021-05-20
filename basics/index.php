<?php

class Bank{

    public $accno;
    public $name;
    public $balance = 0;

    function depositAmount($amt){
        $this->balance += $amt;
    }

    function deductAmount($amt){
        if($this->balance <= 0){
            echo "No Balance in the Account" . PHP_EOL;
            return;
        }
        if($this->balance <= $amt){
            echo "Requested Amount is greater than balance" . PHP_EOL;
            return;
        }

        $this->balance -= $amt;
    }

    function checkBalance(){
        echo "Your Account Balance is: $this->balance"  . PHP_EOL;
    }


}


$bank = new Bank();
$bank->accno = 212;
$bank->name = "Roland Aggrey";
$bank->balance = 500;

$bank->checkBalance();
$bank->depositAmount(500);
$bank->checkBalance();
$bank->deductAmount(200);
$bank->checkBalance();
$bank->deductAmount(2000);
$bank->checkBalance();









