<?php 

class User{
    protected $name, $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Customer extends User{
    private $balance;

    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function getCustomer(){
        return "$this->name, $this->age just paid $$this->balance for the subs!";
    }
}

$customer1 = new Customer("Daniel", 19, 50);
echo $customer1->getCustomer();