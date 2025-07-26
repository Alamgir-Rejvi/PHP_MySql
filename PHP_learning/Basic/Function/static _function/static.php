<h3> ✅Syntax for static</h3>
<p> <pre>class ClassName {
    public static function methodName() {
        // Code here
    }
}</pre>
</p>
<h4>✅ Calling a Static Function:</h4>
<p>ClassName::methodName(); // No need to create an object .
</p>
<h4> Example</h4>

<?php
// static function :
class User {
    const name = "hello world";
    public static function info () {
        echo "This is static method";
    }
}
// Scope resolution oparator "::"
echo User :: info (); // without creating object , It can be called directly;
echo "<br>";
echo User :: name;
echo "<br>";
?>




<?php
// static property
// use of "self" instead of "$this"
class Userr {
    public static $name = "hello world";
    public function staticValue () {
        return self :: $name;
    }
}
$show =  new Userr ();
echo $show-> staticValue ();
echo "<br>";
?>




<?php
// use of self
class S {
    public static $name = "hello world....";
    public function staticValue () {
        return self :: $name;
    }
    public static function show () {
        return "This is static method...";
    }
    static function applyStatic () {
        return self :: show(); // function is called in function;
    }
}
echo S :: applyStatic();
// $show =  new S ();
// echo $show-> staticValue ();
// echo "<br>";
// echo $show-> applyStatic();
?>