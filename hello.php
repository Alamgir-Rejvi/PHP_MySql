<?php 

echo "Hello World! </br>"; // This is my first print in php (It's a comment with forword slash)
echo "I'm here to learn php. <br>"; # here I used Hash tag for comment.
echo "This is The PHP world."; # In above two line, I used break tag with closing and without closing tag

/* echo "Hello World! </br>"; this is also a comment for multiple line...
echo "Hello World! </br>";
echo "Hello World! </br>"; */ 

?>


<!-- php declaration: <?= $a.$b.""."!"?> -->
<?php
$a = "hi ";
$b = "I'm Rejvi";
?>

<?= $a.$b.""."!" # output : hi I'm Rejvi!

?> 

<?php
 echo "<h3> Hi, World! </h3>"; // using HTML tag
 

?>

<?php
    echo "Hi " , "I'm Alamgir"; // using comma to add two argument
    echo "<br>";
?>

<?php
     echo "Hi " . "I'm Rejvi"; //using concatention
     echo "<br>";
?>
<?php
    echo 454; // to print number (without string);
?>

<!-- we can use "print" to get output instead of "echo" but Print can not output with comma -->