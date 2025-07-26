<?php
$a = 30;
$b = 30;

if ($a == $b):
    echo "$a is Greater ";
endif;
?>


<?php
// xor 
$c = 30;

if ($c >= 20 xor $c <= 40) {
    echo "Xor condition"; //(true+true)-- output :  false
}

if ($c <= 20 xor $c >= 40) {
    echo "Xor condition"; //(false + false)-- output :  false
}

if ($c <= 20 xor $c <= 40) {
    echo "Xor condition hfj"; //(false + true )-- output :  true
}

if ($c >= 20 xor $c >= 40) {
    echo "Xor condition false" ; //(true + false)-- output :  true
}
?>