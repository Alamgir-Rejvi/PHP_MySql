<!DOCTYPE html>
<html>
<head>
    <title>Simple Form Validation</title>
</head>
<body>
    <?php
    // Initialize empty variables for error and value storing
    $name = $email = "";
    $nameErr = $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check Name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // Optional: validate only letters and spaces
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        // Check Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Display success message if no errors
        if ($nameErr == "" && $emailErr == "") {
            echo "<h3>Form Submitted Successfully!</h3>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
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

    <h2>Simple PHP Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
