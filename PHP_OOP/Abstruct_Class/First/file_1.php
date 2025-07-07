<?php
    namespace First;
    class Fruit {
        //
        public $name = "Alamgir";
        public $id = "1288420";

        // method
        public function info ($name,$id) {
            $this -> name = $name;
            return $this -> name;
        }
    }
    $me = new Fruit ();
    echo $me -> name;
     echo "<br>";
    echo $me -> id;
    echo "<br>";
    var_dump($me instanceof Fruit);

    ?>

    
    <?php
    // construct method;
    class ClassName {
        public $name;
        public $age;
        public function __construct ($name , $age) {
            $this-> name = $name;
            $this-> age = $age;
        }

        function get () {
            return "Name is " . $this-> name ." Age is ". $this-> age;
        }
    }
    $object_1 = new ClassName (name : "Alamgir", age : "28");
    echo $object_1 -> get() ;
    echo "<br>";
    ?>
