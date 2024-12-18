<?php

namespace Store;

class ItemBuilder {
    private $name;
    private $price;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function build() {
        return new Item($this->name, $this->price);
    }
}
