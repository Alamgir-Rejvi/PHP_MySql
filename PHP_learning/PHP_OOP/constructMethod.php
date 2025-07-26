<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Construct Method in php</h3> <br>


    <!-- <?php
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
    ?> -->

    




    <?php
    // both method in one class
    class A {
        public function __destruct () {
            echo "bye";
        }

        function get () {
            echo " This is get";
        }

        function show () {
            echo " This is show";
        }
        function __construct () {
            echo "hi";
        }
    }
    // $object_1 = new A (); // here construct output"hi" will show first then distruct will show;


    class B extends A {
        public $address;
        public $email;
        public function fullinfo () {
            echo "This class is b";
        }
        public function __construct($address,$email) {
            echo $this -> address = $address;
            echo $this -> email = $email;
        }

    }

    class C extends B {
        public $age;
        function display () {
            echo " display";
        }
        function __construct(){
            echo "This is child class";
        }
    }

    $b = new C ();
    echo $b -> display();
    // $b -> fullinfo();
    // echo "<br>";
    // $b -> show ();
    // echo "<br>";
    // $b -> get ();

    ?>

    








    <!-- <?php
    class CourseDetail {
        public $subject;
        public $id;
        function __distruct () {
            echo "Hello world";
            echo "<br>";
        }
    }
    $object_2 = new CourseDetail ();
    print_r($object_2);
    // ?> -->
</body>
</html>