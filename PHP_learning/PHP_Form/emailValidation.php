<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <form method = "post">
        <label for="email"> Input Your Email</label>
        <input type="email" name ="email" id = "email">
        <input type="submit" name ="submit" value = "Submit Email">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $collect = $_POST['email'];

        if(preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $collect)) {
            echo "Your Email is valid";
        } else {
            echo "Input a valid email";
        }
    }
    ?>
</body>
</html>