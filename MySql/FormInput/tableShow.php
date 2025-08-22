<?php
$connection = mysqli_connect("localhost", "root", "", "your_database_name");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to join brand and product
$sql = "SELECT product.id, product.name AS product_name, product.price, brand.name AS brand_name 
        FROM product 
        INNER JOIN brand ON product.brand_id = brand.id";

$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid gray;
            text-align: center;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Product with Brand</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price ($)</th>
        <th>Brand</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['product_name'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['brand_name'] ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>

<?php mysqli_close($connection); ?>
