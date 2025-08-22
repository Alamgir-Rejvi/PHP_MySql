<?php
$conn = new mysqli("localhost", "root", "", "e_commerce");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Product.id AS product_id, Product.name AS product_name, Product.price,
               Manufacturer.name AS manufacturer_name, Manufacturer.contact_no
        FROM Product
        INNER JOIN Manufacturer ON Product.manufacturer_id = Manufacturer.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Product ID</th><th>Product Name</th><th>Price</th>
                <th>Manufacturer Name</th><th>Contact No</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['product_id']}</td>
                <td>{$row['product_name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['manufacturer_name']}</td>
                <td>{$row['contact_no']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No products found.";
}

$conn->close();
?>
