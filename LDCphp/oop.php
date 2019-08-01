<?php
    class Person{
        //properties - attributes in the form of a variable
            //access modifier to properties:
            // public - access from anywhere - even outside the class - usually make a public function but private variables
            // private - only access inside class
            // protected - access from this class and ones that extend it

                //static = means you don't have to instantiate the object to use it

        // methods - functions inside the class
        private $name;
        private $email;
        private static $ageLimit = 40;
        
        //variable $person1
        // $person1 = new Person;
        //instantiating object - Person

        // $person1->name = 'John Doe';
        //variable is set

        // echo $person1->name;

        //CONSTRUCTOR - runs when we instantiate the object
        //can pass values in and set them
        public function __construct($name, $email){
            $this -> name = $name;
            $this -> email = $email;
            // echo 'Person created.<br>';
            // same as commented out - magic class!
            echo __CLASS__. ' created','<br>';
        }

        //DE-CONSTRUCT PERSON - DELETE/DISABLE
        public function __destruct(){
            echo __CLASS__. ' destroyed','<br>';
        }

    public function getName(){
        return $this -> name.'<br>';
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getEmail(){
        return $this -> email.'<br>';
    }

    public function setEmail($email){
        $this->email = $email;
    }

    //static uses self:: instead of this->
    public static function getAgeLimit() {
        return self::$ageLimit;
    }

    }
//it is static so we didn't have to instantiate, but it works!
    // echo Person::$ageLimit;
    // echo Person::getAgeLimit();


    // //this is a lot of getting and setting - 
    // // a constructor would make life much easier!
    // $person1 = new Person("BOBBY",'BOB@E.COM');
    // // $person1 -> setName('Mr. John Doe');
    // // $person1 -> setEmail('MJD@green.com');
    // echo $person1->getName();
    // echo $person1->getEmail();




    class Customer extends Person{
        private $balance;

        public function __construct($name,$email,$balance){
            parent:: __construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.'has been created.';
        }

        public function getBalance(){
            return $this -> balance.'<br>';
        }
    
        public function setBalance($balance){
            $this->balance = $balance;
        }
    

    }

    $customer1 = new Customer("Gertie", "iSawET@really.com", 300);

    echo $customer1->getBalance();


?>