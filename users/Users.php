<?php
class User {
    public $name;
    public $surname;
    private $password;
    public function __construct($name, $surname, $password, $country, $street, $postalCode)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->country = $country;
        $this->street = $street ;
        $this->postalCode = $postalCode;
    }
}