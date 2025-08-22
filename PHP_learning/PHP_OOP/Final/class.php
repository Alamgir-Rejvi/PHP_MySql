<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP class</h3>

    <?php
    // basic class

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
    ?>



    <?php
    // default value in basic class
    class D {
        public $hobby = "No";
        public $game ="Not interest";
        public function see () {
            echo "My hobby is :" . $this->hobby . " and game is :" . $this->game;
        }
    }
    $a = new D();
    $a->hobby = "gardening";
    // $a->game ="chess";
    $a-> see();
    echo "<br>";
    ?>



</body>
</html>