<?php
if (isset ($_POST['submit'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $file = file("dataStore.txt");

    foreach($file as $line) {
        list ($_username,$_password) = explode("," ,$line);
        if ($_username ==$username && $_password ==$password){
            header("location:demo.php");
        }else {
            $msg = "Username or Password is incorrect!";
        }
    }
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
    <?php 
    echo isset($msg)?$msg:"";
    ?>

    <form method = "post">
        Username : <input type="text" name ="username">; <br> <br>
        Password : <input type="text" name ="password">; <br> <br>
        <input type="submit" name = "submit" value ="Submit">
    </form>
</body>
</html>
