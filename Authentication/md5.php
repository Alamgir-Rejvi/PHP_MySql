<?php
$password = "admin";
$m = md5($password);
echo $m;
echo "<br>";
echo strlen ($m);



$m1 = sha1($password);
echo $m1;
echo "<br>";
echo strlen ($m1);
echo "<br>";





echo "hash()";
echo "<br>";
$input = "helloe334";
$hash = hash ("dfe4234", $input);
echo $hash;
echo "<br>";


$a = base64_encode($password);
echo $a;
echo '<br>';
echo strlen ($a);

echo "<br>";
echo base64_decode("fdjkjw");
?>