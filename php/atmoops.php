<?php
class ATM{
    private $balance;
    public function __construct($initialBalance){
        $this->balance = $initialBalance;
    }

    public function checkBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposit successful.New balance:$".$this->balance;
        } else {
            return "Invalid deposit amount.";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrawal successful.New balance:$".$this->balance;
        } else {
            return "Invalid withdrawal amount or insufficient funds.";
        }
    }
}
$atm = new ATM(1000);


