<?php
// son of "Users"
require_once __DIR__ .'/Users.php';
class Client extends User {
    public $budget;
    public $favItems;
    public function __construct($name, $surname, $password, $country, $street, $postalCode, $budget, $favItems)
    {
        parent::__construct($name, $surname, $password, $country, $street, $postalCode);
        $this->budget = $budget;
        $this->favItems = $favItems;
    }
    public function getCustomersInfo(){
        echo "Customers Info: " . $this->name . " " . $this->surname ."<br>";

    }


}

