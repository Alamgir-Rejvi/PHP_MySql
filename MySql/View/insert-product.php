<?php
// Step 1: Connect to the database
$conn = mysqli_connect("localhost", "root", "", "my_commerce");

// Step 2: Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Check if form submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $manufacturer_id = $_POST['manufacturer_id'];

    // Step 4: Prepare the query
    $sql = "INSERT INTO product (name, price, manufacturer_id) 
            VALUES ('$name', '$price', '$manufacturer_id')";

    // Step 5: Run the query
    if (mysqli_query($conn, $sql)) {
        echo "Product inserted successfully.";
    } else {
        echo "Error inserting product: " . mysqli_error($conn);
    }
}

// Step 6: Close connection
mysqli_close($conn);
?>
