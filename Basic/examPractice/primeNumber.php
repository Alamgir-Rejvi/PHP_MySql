<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <form method = "post">
        <label for="number">Input a number : </label>
        <input type="number" name = "number">
        <input type="submit" value ="Submit" name = "submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $collect = (int)$_POST['number'];
        $divisor = 0;
        
        if ($collect <= 1) {
            echo $collect ." is not a Prime or Composite Number";
            exit();
        }
        for ($i = 2; $i < $collect; $i ++){
            if ($collect % $i == 0) {
                $prime ++;
                break;
            }
        }
        if ($divisor == 0) {
            echo $collect . " is a Prime Number";
        } else {
            echo $collect . " is Composite Number";
        }
    }
    ?>
</body>
</html>