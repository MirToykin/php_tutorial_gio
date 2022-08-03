<?php

declare(strict_types=1);

use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

$transaction = new Transaction(100, 'Transaction');

var_dump($transaction);