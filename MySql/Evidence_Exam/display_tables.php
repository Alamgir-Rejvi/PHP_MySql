<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "evidence_exam");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query 1: Get Manufacturer data
$manufacturer_sql = "SELECT * FROM Manufacturer";
$manufacturer_result = $conn->query($manufacturer_sql);

// Query 2: Get Product data
$product_sql = "SELECT * FROM Product";
$product_result = $conn->query($product_sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manufacturer and Product Tables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            margin-top: 40px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>Manufacturer Table</h2>
<?php
if ($manufacturer_result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Contact No</th></tr>";
    while ($row = $manufacturer_result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['address']}</td>
                <td>{$row['contact_no']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No manufacturers found.</p>";
}
?>

<h2>Product Table</h2>
<?php
if ($product_result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Manufacturer ID</th></tr>";
    while ($row = $product_result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['manufacturer_id']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No products found.</p>";
}

// Close connection
$conn->close();
?>

</body>
</html>
