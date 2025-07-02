<!-- 1️⃣ Using foreach loop-->

<?php
$numbers = array (2,5,0,-4,0,1,-3,9);
$positive = 0;
$negative = 0;
$zero = 0;

foreach ($numbers as $num) {
    if ($num > 0) {
        $positive ++;
    }
    elseif ($num < 0) {
        $negative ++;
    } else{
        $zero ++;
    }
}

echo "Positive Numbers : " . $positive . "<br>";
echo "Negative Numbers : " . $negative . "<br>";
echo "Zero Numbers : " . $zero . "<br> <br>";

?>




<!-- 2️⃣ Using for loop with count() -->
<?php
$numbers = [2, -5, 0, 7, -3, 0, 4, -1];

$positive = 0;
$negative = 0;
$zero = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $positive++;
    } elseif ($numbers[$i] < 0) {
        $negative++;
    } else {
        $zero++;
    }
}

echo "Positive: $positive <br>";
echo "Negative: $negative <br>";
echo "Zero: $zero <br> <br>";
?>




<!-- 3️⃣ Using array_filter + count() -->

<?php
$numbers = [2, -5, 0, 7, -3, 0, 4, -1];

$positive = count(array_filter($numbers, fn($n) => $n > 0)); // fn($n) => condition is an arrow function (PHP 7.4+).


$negative = count(array_filter($numbers, fn($n) => $n < 0));
$zero = count(array_filter($numbers, fn($n) => $n == 0));

echo "Positive: $positive <br>";
echo "Negative: $negative <br>";
echo "Zero: $zero <br>";
?>
