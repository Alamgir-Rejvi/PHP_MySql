<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set and Get Method</title>
</head>
<body>
    <?php
    class A {
        public $name;
        public $id;
        function set_Check ($name,$id) {
            $this-> name =$name;
            $this-> id =$id;
        }

        function get_Find () {
            return $this -> name;
        }
    }
    $obj = new A ();
    $obj -> set_Check ("Alamgir Rejvi");
    echo $obj-> get_Find();
    ?>
</body>
</html>