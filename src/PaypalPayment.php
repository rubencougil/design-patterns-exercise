<?php

namespace Store;

class PaypalPayment implements PaymentMethod
{
    public function pay(Amount $totalAmount)
    {
        echo "Paid with PayPal";
    }
}
