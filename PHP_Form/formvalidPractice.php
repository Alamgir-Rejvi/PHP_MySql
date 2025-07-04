<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $email =  "";
    $nameErr = $emailErr = "" ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Check Name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        }else{
            $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
        }


        // Check Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }else {
            $email = test_input ($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid Email";
            }
        }


        // Display success message if no errors
        if ($nameErr == "" && $emailErr == "") {
            echo "<h2> Form is Submittd Successfully </h2>";
            echo "Name : " .  $name . "<br>";
            echo "Email : " . $email ."<br>";
        }
    }


        // Function for cleaning input data
        function test_input($data) {
            $data = trim($data); // remove extra spaces
            $data = stripslashes($data); // remove backslashes
            $data = htmlspecialchars($data); // convert special characters to HTML entities
            return $data;
        }
    
    ?>

    <form method = "post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
        Name : <input type="text" name = "name" value = "<?php echo $name; ?>" > 
        <span style ="color: red;"> <?php echo $nameErr; ?></span>
        <br><br>

        Email : <input type="text" name = "email" value ="<?php echo $email;?> "> 
        <span style = "color: red;" > <?php echo $emailErr; ?></span>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>