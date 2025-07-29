<?php include "db_connect.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert and Delete - Manufacturer and Product</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin-bottom: 40px; }
        th, td { border: 1px solid #666; padding: 10px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
<h2>Insert Manufacturer</h2>
<form method="POST">
    Name: <input type="text" name="m_name" required>
    Address: <input type="text" name="m_address">
    Contact: <input type="text" name="m_contact">
    <button type="submit" name="insert_manufacturer">Insert Manufacturer</button>
</form>

<h2>Insert Product</h2>
<form method="POST">
    Name: <input type="text" name="p_name" required>
    Price: <input type="number" name="p_price" required>
    Manufacturer ID: <input type="number" name="p_manufacturer_id" required>
    <button type="submit" name="insert_product">Insert Product</button>
</form>

<?php
// Insert Manufacturer
if (isset($_POST['insert_manufacturer'])) {
    $name = $_POST['m_name'];
    $address = $_POST['m_address'];
    $contact = $_POST['m_contact'];

    $sql = "INSERT INTO Manufacturer (name, address, contact_no)
            VALUES ('$name', '$address', '$contact')";

    if (mysqli_query($connection, $sql)) {
        echo "<p>Manufacturer inserted successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

// Insert Product
if (isset($_POST['insert_product'])) {
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $man_id = $_POST['p_manufacturer_id'];

    $sql = "INSERT INTO Product (name, price, manufacturer_id)
            VALUES ('$name', $price, $man_id)";

    if (mysqli_query($connection, $sql)) {
        echo "<p>Product inserted successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

// Display Manufacturer Table
echo "<h2>Manufacturer Table</h2>";
$result = mysqli_query($connection, "SELECT * FROM Manufacturer");
echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>Action</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['address']}</td>
            <td>{$row['contact_no']}</td>
            <td><a href='delete.php?type=manufacturer&id={$row['id']}'>Delete</a></td>
          </tr>";
}
echo "</table>";

// Display Product Table
echo "<h2>Product Table</h2>";
$result = mysqli_query($connection, "SELECT * FROM Product");
echo "<table><tr><th>ID</th><th>Name</th><th>Price</th><th>Manufacturer ID</th><th>Action</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['price']}</td>
            <td>{$row['manufacturer_id']}</td>
            <td><a href='delete.php?type=product&id={$row['id']}'>Delete</a></td>
          </tr>";
}
echo "</table>";

mysqli_close($connection);
?>
</body>
</html>
