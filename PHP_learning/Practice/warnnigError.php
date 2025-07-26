<h3>✅ E_WARNING = Non-fatal runtime error in PHP. <br>
✅ Script continues executing after the warning.</h3>

<?php
$x = 10;
$y = 0;
echo $x / $y;
echo "After warning."; // this will be executed


// Warning: Division by zero in C:\xampp\htdocs\test.php on line 4 INF

// After warning.

?>
