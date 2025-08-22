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

<<<<<<< HEAD

if ($a > $b && $a > $b) {
=======
if ($a > $b && $a > $c) {
>>>>>>> 453e5baeb28af7550a5040c5fbf2d64c55160b62
    echo $a . " is the largest number";
} elseif ($b > $a and $b > $c) {
    echo $b . " is the largest number";
} else {
    echo $c . " is the largest number";
    echo "<br>";
}
?>


<!--Another way by foreach...as , trim , max -->



<br> <br>
<form method="post">
    Enter numbers separated by commas:<br>
    <input type="text" name="numbers" required>
    <input type="submit" value="Find Largest">
</form> 

<?php
if ($_POST) {
    $input = $_POST['numbers']; // collect user input as string like "12, 5, 23"
    $numbers = explode(",", $input); // split by comma into array like this [12, 5, 23, 8, 34, 2]

    // Trim spaces and convert to integers
    foreach ($numbers as &$num) {
        $num = (int)trim($num);
    }

    $largest = max($numbers); // find the largest using built-in max()

    echo "The largest number is: " . $largest;
}
?>


