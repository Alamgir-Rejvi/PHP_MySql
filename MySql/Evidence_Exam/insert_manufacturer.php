<?php
// Connect to database
$connection = new mysqli("localhost", "root", "", "evidence_exam");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Collect form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    // Prepare and execute stored procedure
    $stmt = $connection->prepare("CALL insert_manufacturer(?, ?, ?)");
    $stmt->bind_param("sss", $name, $address, $contact);

    if ($stmt->execute()) {
        echo "✅ Manufacturer inserted successfully.";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    // Close
    $stmt->close();
}

$connection->close();
?>
