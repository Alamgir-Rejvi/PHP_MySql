<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $errors = [];

    if (empty($username)) $errors[] = "Username required";
    if (empty($password)) $errors[] = "Password required";

    if (!$errors) {
        $found = false;
        $users = file('users.txt', FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($saved_user, $hashed_password) = explode('|', $user);
            if ($saved_user === $username && password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username;
                header('Location: dashboard.php');
                exit;
            }
        }
        $errors[] = "Invalid username or password";
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>
<?php
if (!empty($errors)) {
    foreach ($errors as $e) echo "<p style='color:red;'>$e</p>";
}
?>
