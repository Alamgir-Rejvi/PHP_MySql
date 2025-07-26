<?php

$data = ["apple", "orange", "mango123", "banana456", "grape"];

$result = preg_grep('/\d+/', $data);

print_r($result);

?>

<?php

$data = ["apple", "orange", "mango123", "banana456", "grape"];

$show = preg_grep('/\d+/', $data ,PREG_GREP_INVERT);

print_r($show);

?>

