
<?php
class A {
    public static $name = "Hi, this static with inheritance";
    public function staticValue () {
        return self :: $name;
    }

    public static function see () {
        return "this is static method...";
    }

    function view () {
        return self :: see();
    }
}

class B extends A {
    public function myStatic () {
        return parent :: $name;
        return parent :: see();
    }
}
$S =  new B ();
echo $S-> myStatic ();
echo "<br>";
echo $S -> see();
?>