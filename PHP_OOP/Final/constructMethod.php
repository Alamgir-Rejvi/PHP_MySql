 <h3>Construct Method</h3>
 <h4>Syntax :</h4>
 <p>function __construct() {
    // Initialize the object properties 
} <br> It is defined inside the class and is used to automatically call when the object is created.</p> <br>


<?php
    // construct method
    class Person {
        public $name;
        public $aim;
        public function __construct($n,$a) { // construct is used for calling automatically and reducing code;
            $this->name = $n;
            $this->aim = $a;
        }
        public function display () {
            echo "My name is Alamgir Rejvi ". $this->name . " and my aim is " . $this->aim;
        }
    }
    $obj = new Person("Alamgir","being a coder");
    $obj->display();
    echo "<br>";
    ?>
    
    <?php
    // default value in construct method
    class CheckDefault {
        public $name;
        public $age;
        public function __construct ($name ="Not inputed",$age ="nai"){
            $this->name = $name;
            $this->age = $age;
        }

        public function dis () {
            echo "His name is " . $this->name . " and his is " . $this->age;
        }
    }
    $A = new CheckDefault("Alamgir"); //here value for $age is not assigned so this will show "nai"
    $B = new CheckDefault("Rejvi",28); // for creating another object ;
    $A-> dis();
    echo "<br>";
    $B-> dis();
    ?>


    
    <?php
    // Constructor without parameter:
    class Student {
        function __construct() {
            print "This is __construct without parameter\n";
            print "Welcome To GeeksforGeek";
        }
    }

    $obj = new Student();
    ?>