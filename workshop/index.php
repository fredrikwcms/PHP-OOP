<?

class Account {
    protected $balance;
    protected $transactions = [];

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;

        array_push($this->transactions, $amount);
    }

    public function withdraw($amount) {
        $this->balance -= $amount;

        array_push($this->transactions, $amount);
    }
}

$account = new Account(1000);

$account->deposit(200);

print_r($account); ?>

<br>

<? $account->withdraw(100);

print_r($account);