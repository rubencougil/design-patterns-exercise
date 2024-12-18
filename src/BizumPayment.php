<?php

namespace Store;

class BizumPayment implements PaymentMethod
{
    public function pay(Amount $totalAmount)
    {
        echo "Paid with Bizum";
    }
}
