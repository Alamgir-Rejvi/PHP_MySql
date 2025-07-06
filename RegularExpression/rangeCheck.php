<?php
$str = "this is a regular expression";
$pattern = "/[a-z]/";
echo preg_match($pattern,$str);
?>