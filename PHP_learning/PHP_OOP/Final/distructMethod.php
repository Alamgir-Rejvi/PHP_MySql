<h3>Destruct Method</h3>
<h4>Syntax</h4>
<p>function __destruct() {
    // Destroy objects or release memory.
}</p>
<p> <pre> Properties:
__destruct() method does not take any parameter.
__destruct() method will not have any return type.
This method works exactly the opposite of the __construct method in PHP.
__destruct gets called automatically at the end of the script.
__destruct() method starts with two underscores (__).
It is used to de-initialize existing objects.  </pre></p> <br> <br>




<?php
class Des {
    function __construct () {
        echo "This is construct function <br>";
    }

    function others () {
        echo "This is others function <br>";
    }

    function __destruct () {
        echo "This is destruct function";
    }
  
}
$show = new Des(); // destruct function will be outputed last; like this : This is construct function This is others function This is destruct function
$show -> others();
?>