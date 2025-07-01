<?php
class Example {
    public $publicVar = 'I am public';
    private $privateVar = 'I am private';
    protected $protectedVar = 'I am protected';

    public function showVars() {
        echo $this->publicVar;     // Works
        // echo $this->privateVar;    // Works
        echo $this->protectedVar;  // Works
    }
}

class ChildExample extends Example {
    public function showParentVars() {
        echo $this->publicVar;     // Works
        // echo $this->privateVar; // ERROR: private, not accessible
        echo $this->protectedVar;  // Works
    }
}

$obj = new Example();
echo $obj->publicVar;           // Works
echo $obj->protectedVar;
echo $obj-> showParentVars();
// echo $obj->privateVar;       // ERROR: private
// echo $obj->protectedVar;     // ERROR: protected

?>