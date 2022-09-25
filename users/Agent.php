<?php
require_once __DIR__ . '/Users.php';
//son of "Users"

class Client extends User {
    public $salesRate;
    public $workArea;
    public function __construct($name, $surname, $password, $country, $street, $postalCode, $salesRate, $workArea)
    {
        parent::__construct($name, $surname, $password, $country, $street, $postalCode);
        $this->salesRate = $salesRate;
        $this->workArea = $workArea;
    }
    public function getAgentinfo(){
        echo "Agent: " . $this->name . " " . $this->surname ."<br>";
        echo "Sales Rate: " . $this->salesRate . "<br>";
    }
}

