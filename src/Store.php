<?php

namespace Store;

class Store
{
    public function buy()
    {
        // Decorator Pattern + Strategy Pattern
        $bizum = new PaymentMethodWithLoggin(new BizumPayment());
        //$creditCard = new PaymentMethodDecorator(new CreditCardPayment());
        //$paypal = new PaymentMethodDecorator(new PayPalPayment());
        $shoppingCart = new ShoppingCart($bizum);

        // Builder Pattern
        $shoes = (new ItemBuilder())->setName('Shoes')->setPrice(10)->build();
        $pants = (new ItemBuilder())->setName('Pants')->setPrice(5)->build();

        $shoppingCart->addItem($shoes);
        $shoppingCart->addItem($pants);

        try {
            $shoppingCart->checkout();
        } catch (PaymentNotSetException $e) {
            echo $e->getMessage();
        }
    }
}

