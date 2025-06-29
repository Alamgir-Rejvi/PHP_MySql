<?php
// require "First/file_1.php";
require "Second/file_2.php";
// use First\Fruit;
use Second\Demoo;

$obj = new Demoo();
$obj -> show();
?>