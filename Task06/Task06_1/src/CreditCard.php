<?php

namespace App;

class CreditCard
{
<<<<<<< HEAD
    private $cardNumber;
    private $expirationDate;

    public function __construct($cardNumber, $expirationDate)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function transfer($amount)
    {
        return "Authorization code: 777";
    }
}
=======
    private $number;
    private $expiration;

    public function __construct($number, $expiration)
    {
        $this->number = $number;
        $this->expiration = $expiration;
    }

    public function authorizeTransaction($amount)
    {
        return "Authorization code: 234da";
    }
}
>>>>>>> 879d3f723426053beedd45c85f6c6494ef66349c
