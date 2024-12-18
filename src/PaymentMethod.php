<?php

namespace Store;

interface PaymentMethod
{
    public function pay(Amount $totalAmount);
}
