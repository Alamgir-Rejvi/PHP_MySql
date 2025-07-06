<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data type</h3>
    <?php
        $str = "Alamgir";
        var_dump($str);
        echo "<br>";

        $neumeric = 32;
        var_dump($neumeric);
        echo "<br>";

        $float = 3434.4234;
        var_dump($float);
        echo "<br>";

        $binary = 0b101011;
        var_dump($binary);
        echo "<br>";

        $hexadecimal = 0x1F;
        var_dump($hexadecimal);
        echo "<br>";


        $octal = 05;
        var_dump($octal);
        echo "<br>";

        $boollean = false;
        var_dump($boollean);
        echo "<br>";

        class Myobject {
            public $a ;
            public function __construct($name) {
                $this->a = $name;
            }
        }
        $obj =  new Myobject(34);
        echo $obj->a;
        echo "<br>";
        var_dump($obj);
        echo "<br>";

        $arr = array("Mohammad", "Alamgir","Rejvi");
        var_dump($arr);
        echo "<br>";
    ?>
</body>
</html>