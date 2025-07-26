<?php
$conn = new mysqli("localhost", "root", "", "e_commerce");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product_name = "Samsung Galaxy S25";
$price = 500;
$manufacturer_id = 1; // Use the ID returned when inserting the manufacturer

$sql = "INSERT INTO Product (name, price, manufacturer_id) VALUES ('$product_name', $price, $manufacturer_id)";

if ($conn->query($sql) === TRUE) {
    echo "Product inserted successfully with ID: " . $conn->insert_id;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
