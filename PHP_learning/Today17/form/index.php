<?php
require "studentClass.php";

$student = new Student();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    $errors = $student->validate($name, $email, $phone);

    if (empty($errors)) {
        $student->saveData($name, $email, $phone);
    }
}

$allData = $student->readData();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Student Form</h2>
    <?php if (!empty($errors)) {
        echo '<ul style="color:red">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    } ?>
    <form method="POST">
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        <label>Phone:</label><br>
        <input type="text" name="phone"><br><br>
        <button type="submit">Submit</button>
    </form>

    <h2>Student Data</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($allData as $entry) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($entry[0]) . "</td>";
            echo "<td>" . htmlspecialchars($entry[1]) . "</td>";
            echo "<td>" . htmlspecialchars($entry[2]) . "</td>";
            echo "</tr>";
        } ?>
    </table>
</body>
</html>
