<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trait_Use</title>
</head>
<body>
    <?php
    trait A {
        public function info () {
            echo "This is info function . <br>";
        }
    }

    trait B {
        public function detail () {
            echo "This is detail function . <br>";
        }
    }

    trait C {
        public function display () {
            echo "This is display function . <br>";
        }
    }

    class Main {
        use C,B; // here we can use single or multiple function
        public $name;
        public $age;
        public function addition (){
            echo " 2 +3 . <br>";
        }
    }
    $ab = new Main ();
    $ab -> addition ();
    $ab ->detail();
    $ab-> display();
    ?>
</body>
</html>