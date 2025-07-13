<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $errors = [];

    // Validation
    if (empty($username)) $errors[] = "Username required";
    if (empty($password)) $errors[] = "Password required";
    if (strlen($password) < 4) $errors[] = "Password must be at least 4 characters";

    // Check if user exists
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($saved_user, ) = explode('|', $user);
        if ($saved_user === $username) {
            $errors[] = "Username already exists";
            break;
        }
    }

    if (!$errors) {
        $line = $username . "|" . password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
        file_put_contents('users.txt', $line, FILE_APPEND);
        echo "Registration successful. <a href='login.php'>Login here</a>";
        exit;
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Register</button>
</form>
<?php
if (!empty($errors)) {
    foreach ($errors as $e) echo "<p style='color:red;'>$e</p>";
}
?>
