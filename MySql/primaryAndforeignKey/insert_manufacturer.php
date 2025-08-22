<?php
$conn = new mysqli("localhost", "root", "", "e_commerce");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "Samsung";
$address = "Dhaka, Bangladesh";
$contact_no = "0123456789";

$sql = "INSERT INTO Manufacturer (name, address, contact_no) VALUES ('$name', '$address', '$contact_no')";

if ($conn->query($sql) === TRUE) {
    echo "Manufacturer inserted successfully with ID: " . $conn->insert_id;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
