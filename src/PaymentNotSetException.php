<?php

namespace Store;

class PaymentNotSetException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Payment method not set");
    }
}
