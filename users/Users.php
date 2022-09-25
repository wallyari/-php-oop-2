<?php
require __DIR__ . '/../address/Address.php';
class User {
    public $name;
    public $surname;
    private $password;

     //keyword for traits
    use Address;
    
    public function __construct($name, $surname, $password,$street,$city)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->street = $street;
        $this->city = $city;
    }
}