<?php
class Property {
    public $flor;
    public $conditions;
    public function __construct($address, $flor, $conditions)
    {
        $this->flor = $flor;
        $this->conditions = $conditions;
        $this->address = $address;
    }
}