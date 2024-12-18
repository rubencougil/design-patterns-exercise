<?php

namespace Store;

class PaymentMethodWithLoggin implements PaymentMethod
{
    private $wrapped;

    public function __construct(PaymentMethod $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    public function pay(Amount $totalAmount)
    {
        echo "Logging: Payment method called\n";
        echo "Logging: Total amount: " . $totalAmount->getValue() . "\n";
        $this->wrapped->pay($totalAmount);
    }
}
