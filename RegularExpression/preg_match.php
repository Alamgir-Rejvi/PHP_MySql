<h3>Syntax</h3>
<p></p>
<?php
$a = " This is preg match match Example";
$p = "/match/";
echo preg_match($p,$a); // output will be 1 (if match) or 0 (if not match);
?>