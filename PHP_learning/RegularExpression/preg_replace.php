<h3>preg_replace()</h3>
<p>preg_replace()	Returns a new string where matched patterns have been replaced with another string</p>
<?php
$str = "visit ";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "microsoft", $str);
?>