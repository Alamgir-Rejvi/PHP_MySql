<h3>Merge // Combine two or more arrays /variables into one </h3>


<?php

$stu_class_9 = [1 => "A", 2 => "B"];
$their_loction = ["person_1" => "Cumilla" , "person_2" => "CTG"];
$detail = array_merge($stu_class_9,$their_loction);
print_r($detail); //output:Array ( [0] => A [1] => B [person_1] => Cumilla [person_2] => CTG )
print_r("<br>");
?>




<?php

$stu_class_9 = [1 => "A", 1 => "B"];
$their_loction = ["person_1" => "Cumilla","person_1" => "CTG"];
$detail = array_merge($stu_class_9,$their_loction);
print_r($detail); //output: Array ( [0] => B [person_1] => CTG )
echo $detail[0]; // output: B
// If two arrays have the same string key, the later one wins
// Numeric keys will be re-indexed starting from 0:

?>