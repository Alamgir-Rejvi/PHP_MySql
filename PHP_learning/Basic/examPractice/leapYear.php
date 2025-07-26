<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <label for="input"></label>
        <input type="number" name ="input">
        <input type="submit" name ="submit" value = "Submit">
    </form>

    <?php
    if (isset ($_POST['submit'])) {
        $collect = (int) $_POST['input'];

        if (($collect % 4 == 0 && $collect % 100 != 0) || $collect % 400 == 0) {
            echo "This is leap year";
        } else {
            echo " Not leap year";
        }
    }

    
    ?>
</body>
</html>