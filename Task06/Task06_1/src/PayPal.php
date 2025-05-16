<?php

namespace App;

class PayPal
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function authorizeTransaction($amount)
=======
    public function getEmail(): string
    {
        return $this->email;
    }

    public function transfer($email, $amount)
>>>>>>> student/Task06
    {
        return "PayPal Success!";
    }
}
=======
    public function transfer($email, $amount)
    {
        return "Paypal Success!";
    }
}
>>>>>>> 879d3f723426053beedd45c85f6c6494ef66349c
