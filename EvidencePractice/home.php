
<?php

require("classForHome.php");

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];


    $object = new Student ($id,$name,$batch);
    $object->dataStore();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        ID : <input type="number" name = "id"> <br> <br>
        Name : <input type="text" name = "name"> <br> <br>
        Batch : <input type="number" name = "batch"><br> <br>
        <input type="submit" name = "submit" value = "Submit">
    </form>

    <?php
    Student :: display_onscreen();
    ?>
</body>
</html>