<h3>Syntax</h3>
<p>$exp = "/w3schools/i";</p>

<p>preg_match()	Returns 1 if the pattern was found in the string and 0 if not</p>

<?php
$a = " This is preg match match Example";
$p = "/match/";
echo preg_match($p,$a); // output will be 1 (if match) or 0 (if not match);
?>