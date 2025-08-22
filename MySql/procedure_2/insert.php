<?php
$connect = new mysqli("localhost", "root", "", "school");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Procedure Call
    $sql = "CALL insert_student('$name', '$email', '$phone')";

    if ($connect->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $connect->error;
    }
}

$connect->close();
?>
