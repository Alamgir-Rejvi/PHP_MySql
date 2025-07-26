<?php
// public access modifier

class Example {
    public $name = "ChatGPT";
}
$obj = new Example();
echo $obj->name; // ✅ Works fine, accessible outside
echo "<br>";
?>





<?php
// protected access modifier

class Prot {
    protected $name = "ChatGPT";
}
$obj = new Prot();
echo $obj->name; // ❌ Fatal error: Cannot access protected property
?>





<?php
// protected access modifier

class ParentClass {
    protected $data = "Protected Data";
}

class ChildClass extends ParentClass {
    public function showData() {
        return $this->data; // ✅ Accessible here
    }
}
$obj = new ChildClass();
echo $obj->showData(); // ✅ Accessible via method
echo $obj->data; // ❌ Fatal error: Cannot access protected property

?>