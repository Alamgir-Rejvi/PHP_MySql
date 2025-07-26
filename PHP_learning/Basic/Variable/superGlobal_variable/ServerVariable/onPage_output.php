<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print input information on same page</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> this can be used-->

    
        <label for="name">Name :</label>
        <input type="text" name="name">
        <label for="id">ID :</label>
        <input type="number" name  ="id">
        <input type="submit" value = "Submit" name ="save">
    </form>

    <?php
    if (isset($_POST['save'])){
        echo $_POST['name']."<br>";
        echo $_POST['id'];
        // print_r($_POST); we can use this for output
    }

    ?>
</body>
</html>