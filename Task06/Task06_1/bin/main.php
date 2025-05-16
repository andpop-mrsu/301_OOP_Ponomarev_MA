#!/usr/bin/env php
<?php

namespace App;

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath)) {
    require_once($autoloadPath);
}

function collectMoney(PaymentAdapterInterface $paymentSystem, $amount)
{
<<<<<<< HEAD
    if ($paymentSystem->collectMoney($amount)) {
        echo "Платеж {$amount} прошел\n";
    }
=======
    if ($paymentSystem->collectMoney($amount)) echo "Платеж {$amount} прошел\n";
>>>>>>> 879d3f723426053beedd45c85f6c6494ef66349c
}

$paypal = new PayPal('customer@aol.com', 'password');
$cc = new CreditCard(1234567890123456, "09/22");

collectMoney(new PayPalAdapter($paypal), 100);
<<<<<<< HEAD
collectMoney(new CreditCardAdapter($cc), 200);
=======
collectMoney(new CreditCardAdapter($cc), 200);
>>>>>>> 879d3f723426053beedd45c85f6c6494ef66349c
