<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="#" method = "post">
        <label for="number">Input a number : </label>
        <input type="number" name ="number">
        <input type="submit" name = "submit">
    </form>

    <?php
    if ($_POST) {
        $fac = 1;
        $collect =(int)$_POST['number'];

        echo "Your Inputed Number is : " . $collect ."<br>";

        for ($i = 1; $i <= $collect; $i ++) {
            $fac *= $i;
        }
        echo "Factorial Result is :" . $fac;
    }
    ?>
</body>
</html>
