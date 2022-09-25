<?php
require __DIR__ . '/../traits/address.php';
//require for traits
class Property {
    public $flor;
    public $conditions;
    public $price;

    //keyword for traits
    use Address;
    
    public function __construct($address, $flor, $conditions,$price)
    {
        $this->flor = $flor;
        $this->conditions = $conditions;
        $this->price = $price;
        $this->address = $address;
    }
}