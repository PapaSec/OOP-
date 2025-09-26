<?php
class BankAccount {
    public $accountNumber;
    public $accountHolder;
    public $accountType;
    private $balance;
    
    public function __construct($accountNumber, $accountHolder, $accountType = "Savings") {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->accountType = $accountType;
        $this->balance = 0.0;
    }
    
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "✅ Deposited: $" . number_format($amount, 2);
        }
        return "❌ Deposit amount must be positive";
    }
    
    public function withdraw($amount) {
        if ($amount <= 0) {
            return "❌ Withdrawal amount must be positive";
        }
        
        if ($amount > $this->balance) {
            return "❌ Insufficient funds! Available: $" . number_format($this->balance, 2);
        }
        
        $this->balance -= $amount;
        return "✅ Withdrawn: $" . number_format($amount, 2);
    }
    
    public function getBalance() {
        return $this->balance;
    }
    
    public function displayAccountInfo() {
        return "Account: {$this->accountNumber} | Holder: {$this->accountHolder} | Type: {$this->accountType} | Balance: $" . number_format($this->balance, 2);
    }
    
    public function transfer($amount, $targetAccount) {
        if ($amount <= 0) {
            return "❌ Transfer amount must be positive";
        }
        
        if ($amount > $this->balance) {
            return "❌ Insufficient funds for transfer!";
        }
        
        // Withdraw from current account
        $this->balance -= $amount;
        
        // Deposit to target account
        $targetAccount->balance += $amount;
        
        return "✅ Transferred $" . number_format($amount, 2) . " to " . $targetAccount->accountHolder;
    }
}

// Demonstration
echo "<h3>BankAccount Class Demo</h3>";

// Create accounts
$account1 = new BankAccount("ACC001", "John Doe", "Savings");
$account2 = new BankAccount("ACC002", "Jane Smith", "Checking");

echo "<strong>Initial Setup:</strong><br>";
echo $account1->displayAccountInfo() . "<br>";
echo $account2->displayAccountInfo() . "<br><br>";

// Perform transactions
echo "<strong>Transactions:</strong><br>";
echo $account1->deposit(1000) . "<br>";
echo $account2->deposit(500) . "<br>";
echo $account1->withdraw(200) . "<br>";
echo $account2->withdraw(600) . "<br>"; // Should fail

echo "<br><strong>After Transactions:</strong><br>";
echo $account1->displayAccountInfo() . "<br>";
echo $account2->displayAccountInfo() . "<br><br>";

// Transfer demonstration
echo "<strong>Transfer Demo:</strong><br>";
echo $account1->transfer(300, $account2) . "<br>";

echo "<br><strong>After Transfer:</strong><br>";
echo $account1->displayAccountInfo() . "<br>";
echo $account2->displayAccountInfo() . "<br>";
