<?php

namespace Store;

class CreditCardPayment implements PaymentMethod
{
    public function pay(Amount $totalAmount)
    {
        echo "Paid with Credit Card";
    }
}
