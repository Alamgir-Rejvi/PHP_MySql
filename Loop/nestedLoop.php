
<?php
for ($a = 1; $a <=5; $a++){
    echo  $a . ")<b> This is For loop <br> </b></li>";
}
?>




<?php
// nested loop of normal number sequence;
for ($a = 1; $a <=100; $a = $a + 10){
    for ($b = $a; $b < $a + 10; $b ++) {
        echo $b . " ";
    }
    echo "<br>";
}
?>