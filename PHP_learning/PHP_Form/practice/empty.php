<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <label for="name">Name:</label>
        <input type="text">
        <input type="submit" name = "submit" value = "Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $collect = $_POST
    }
    ?>
</body>
</html>