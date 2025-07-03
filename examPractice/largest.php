<form method = "post">
    <input type="number" name  ="num1" placeholder = "Input first number" require>;
    <input type="number" name  ="num2" placeholder = "Input second number" require>;
    <input type="number" name  ="num3" placeholder = "Input third number" require>;<br> <br>
    <input type="submit" value ="Submit" name = "submit">
</form>


<?php
if (isset($_POST["submit"])) {
    $a = (int) $_POST["num1"];
    $b = (int) $_POST["num2"];
    $c = (int) $_POST["num3"];

}

if ($a > $b && $a > $b) {
    echo $a . " is the largest number";
} elseif ($b > $a and $b > $c) {
    echo $b . " is the largest number";
} else {
    echo $c . " is the largest number";
}
?>


