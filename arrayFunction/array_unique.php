<h3>array_unique() : Removes duplicate values</h3>

<?php
$a = ["A","G","C", "C","B"];

$c = array_unique($a);
print_r($c); // Array ( [0] => A [1] => G [2] => C [4] => B )

?>