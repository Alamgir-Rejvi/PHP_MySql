<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method ="post">
        <label for="number">Input Number :</label>
        <input type="number" name = "number">
        <input type="submit" name = "submit">
    </form>

    <?php
    $collect = ($_POST["number"]);
    $itit = 0;
    if ($_POST["submit"]) {
        if ($itit == 0 || $itit == 1) {
            echo "This is not a prime number or composite";
            exit;
        }
        for ($i = 2; $i < $itit; $i ++){
            if ($itit % $i == 0){
                $c ++;
                break;
            }
    }
    if ($c == 0)
        echo "$itit is a Prime number";
        else
        echo "$itit is Not a Prime number";
    }

    ?>

</body>
</html>