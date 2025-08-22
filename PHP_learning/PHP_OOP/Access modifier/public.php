<?php
// public
class Person {
    public $name;
    public function pub () {
        echo " My name is Alamgir Rejvi";
    }
}
$show = new Person();
echo $show -> name;
echo $show -> pub(); // output : My name is Alamgir Rejvi
?>




