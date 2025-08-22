<!DOCTYPE html>
<html>
<head>
    <title>Simple Form Validation</title>
</head>
<body>

<?php
// Initialize variables
$username = $email = $password = "";
$usernameErr = $emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username validation
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = htmlspecialchars($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }
}
?>

<h2>Simple Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Username: <input type="text" name="username" value="<?php echo $username; ?>">
    <span style="color:red;">* <?php echo $usernameErr; ?></span>
    <br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;">* <?php echo $emailErr; ?></span>
    <br><br>

    Password: <input type="password" name="password">
    <span style="color:red;">* <?php echo $passwordErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
// If all fields are valid, show submitted data
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$usernameErr && !$emailErr && !$passwordErr) {
    echo "<h3>Form Submitted Successfully!</h3>";
    echo "Username: $username <br>";
    echo "Email: $email <br>";
    // Avoid displaying password for security
}
?>

</body>
</html>
