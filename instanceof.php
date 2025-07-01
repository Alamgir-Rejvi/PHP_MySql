<h3>instanceof</h3>
<p>The instanceof keyword is used to check if an object belongs to a class. The comparison returns true if the object is an instance of the class, it returns false if it is not.</p>
<h3>Example</h3>
<?php
class A {
    public $name = "Alamgir";
}
class B {
    public $Nname = "Rejvi";
}
$a = new A ();
$b = new B ();
var_dump($b instanceof A); // bool(false
echo "<br>";
var_dump($b instanceof B); // bool(true)
?>