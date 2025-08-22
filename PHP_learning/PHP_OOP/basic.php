<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit {
        // property
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
</body>
</html>