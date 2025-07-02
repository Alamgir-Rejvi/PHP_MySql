<form method = "post">
    <label for="number"> Input a Number :</label>
    <input type="number" name = "number">
    <input type="submit" value = "Submit" name ="submit">
</form>

<?php
if (isset($_POST["submit"])) {
    $collect = $_POST["number"];
    $divisor = 0;

    if ($collect <= 1) {
        echo $collect . " is not a Prime or Composite Number";
        exit();
    }
    for ($i = 2; $i < $collect; $i ++) {
        if ($collect % $i == 0) {
            $divisor ++;
            break;
        }
    }
    if ($divisor == 0) {
        echo $collect . " is a Prime Number";
    } else {
        echo $collect . " is a Composite Number";
    }
}
?>