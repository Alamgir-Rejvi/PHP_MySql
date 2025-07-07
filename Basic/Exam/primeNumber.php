<form method = "post">
    <label for="number">Input a number</label>
    <input type="text" name = "number">
    <input type="submit" name = "submit">
</form>
<?php

$collect = ($_POST["number"]); // To store the inputed number in a variable;

$is_numeric = "true"; // to check validation of number or not number;
if (!is_numeric($collect)) {
    echo "Please enter a valid number.";
    exit();
}

$init = 0; // This will be used to check if a divisor is found.
if ($_POST["submit"]){ // Checks if the form has been submitted;
    if ($collect <= 1){
        echo "The number is not a Prime or Composite";
        exit();
    }
    
    for ($i = 2; $i < $collect; $i ++){ // to check if $collect is divisible by any number in this range.
        if ($collect % $i == 0){
            $init ++;
            break;
        }
    }

    //  If $init == 0, no divisors were found during the loop ⇒ $collect is Prime. Otherwise $collect is Not Prime.
    if ($init == 0) { 
        
        echo "$collect is a Prime number";
    }else {
        echo "$collect is Not a prime number";
    }
}
?>
