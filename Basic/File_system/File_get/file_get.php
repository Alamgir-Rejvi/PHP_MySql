<?php
$a = 'file.txt';
$current = file_get_contents($a);
$current .= "This is store function "." <br>";
file_put_contents($a,$current)
?>