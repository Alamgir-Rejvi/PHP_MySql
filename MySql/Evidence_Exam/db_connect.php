<?php
$connection = mysqli_connect("localhost", "root", "", "evidence_exam");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
