<?php
namespace Second;
    // first class

    class Demo {
        public $name; // property
        public $goal;
        public function show () {
            echo "My name is " . $this->name ." , my goal is ". $this-> goal;
        }
    }
    $object = new Demo(); // here an object is created;
    $object -> name = "Alamgir Rejvi"; // here value is assigned
    $object -> goal = "being a programmer.";
    $object-> show(); // for output , "show" function is called here
    echo "<br>";



    // second class

    class Demoo {
        public $name; // property
        public $goal;
        public function show () {
            echo "My name is (copy) " . $this->name ." , my goal is (copy) ". $this-> goal;
        }
    }
    $object = new Demo(); // here an object is created;
    $object -> name = "Alamgir Rejvi"; // here value is assigned
    $object -> goal = "being a programmer.";
    $object-> show(); // for output , "show" function is called here
    echo "<br>";
    ?>