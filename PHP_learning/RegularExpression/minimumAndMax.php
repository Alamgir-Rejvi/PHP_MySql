<?php
$str = "TcM4yytry";
$pattern = "/^[a-zA-Z0-9]{3,5}$/";
echo preg_match_all($pattern, $str); // output : 0 becouse of being false;
echo "<br>";
?>

<?php
$str = "Tch2";
$pattern = "/^[a-zA-Z0-9]{3,5}$/";
echo preg_match_all($pattern, $str); // output : 1 becouse of being true;
?>