<h3>preg_match_all()</h3>

<p>preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0</p>

<?php
$a = " This is preg match match  is Is Example";
$p = "/is/i";

echo preg_match_all($p,$a); // output will be 1 (if match) or 0 (if not match);
?>


<!-- use of or -->
 <?php
$str = "The rain in SPAIN falls mainly  the plains.";
$pattern = "/in | the /i";

$show =  preg_match_all($pattern,$str); // output will be 1 (if match) or 0 (if not match);
print_r($show);
?>




 <?php
$str = "The rain in SPAIN falls mainly  the plains.";
$pattern = "/[^in]/i";

$show =  preg_match_all($pattern,$str); // output 33
print_r($show);
?>