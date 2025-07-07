<h3> shift : remove from start</h3>

<?php
$food = ["apple","mango","banana"];
$remove = array_shift($food);
echo implode(", " ,$food); // mango, banana
?>