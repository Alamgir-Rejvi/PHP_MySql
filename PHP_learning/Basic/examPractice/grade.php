<form method = "post">
    <label for="input"> Input Your Score</label>
    <input type="number" name = "input">
    <input type="submit" value = "Submit" name = "submit">
</form>

<?php
if (isset ($_POST["submit"])) {
    $collect = (int) $_POST["input"];
    
    if ($collect >= 90) {
        echo "Your Grade is A+ ";
    } elseif ($collect >= 80) {
        echo "Your Grade is A ";
    } elseif ($collect >= 70) {
        echo "Your Grade is B ";
    } elseif ($collect >= 60) {
        echo "Your Grade is C ";
    } else {
        echo "Fail";
    }
}
?>