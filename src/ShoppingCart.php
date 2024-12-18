<?php

namespace Store;

class ShoppingCart {
    private $items = [];
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function addItem(Item $item) {
        $this->items[] = $item;
    }

    /**
     * @throws PaymentNotSetException
     */
    public function checkout() {
        if ($this->paymentMethod === null) {
            throw new PaymentNotSetException("Payment method not set.");
        }

        $totalAmount = 0;
        foreach ($this->items as $item) {
            echo "Item: {$item->getName()} - Price: {$item->getPrice()}\n";
            $totalAmount += $item->getPrice();
        }

        $this->paymentMethod->pay(new Amount($totalAmount));
    }
}
