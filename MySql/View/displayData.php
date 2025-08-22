<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "my_commerce");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to fetch data from the view
$sql = "SELECT * FROM expensive_products";
$result = mysqli_query($conn, $sql);

// Check if any records found
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Products with Price > 5000</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
          </tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['manufacturer_id']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No products found with price greater than 5000.";
}

// Close the connection
mysqli_close($conn);
?>
