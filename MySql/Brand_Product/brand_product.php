<?php
// DB connection
$conn = mysqli_connect("localhost", "root", "", "e_commerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle Manufacturer Form Submission
if (isset($_POST['add_manufacturer'])) {
    $name = $_POST['manufacturer_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact_no'];

    if (!empty($name) && !empty($address) && !empty($contact)) {
        mysqli_query($conn, "INSERT INTO manufacturer (name, address, contact_no) 
                             VALUES ('$name', '$address', '$contact')");
    }
}

// Handle Product Form Submission
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $manufacturer_id = $_POST['manufacturer_id'];

    if (!empty($product_name) && !empty($price) && !empty($manufacturer_id)) {
        mysqli_query($conn, "INSERT INTO product (name, price, manufacturer_id) 
                             VALUES ('$product_name', '$price', '$manufacturer_id')");
    }
}

// Fetch manufacturer list for dropdown and product list
$manufacturers = mysqli_query($conn, "SELECT * FROM manufacturer");
$products = mysqli_query($conn, "SELECT * FROM horizon");

// $products = "SELECT * FROM horizon";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manufacturer and Product Entry</title>
    <style>
        body { font-family: Arial; }
        .container { display: flex; justify-content: space-around; margin-top: 30px; }
        .form-box { width: 45%; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        h2, h3 { text-align: center; }
        input, select { width: 100%; padding: 8px; margin: 8px 0; }
        input[type=submit] { background: #4CAF50; color: white; border: none; }
        table { margin: 30px auto; border-collapse: collapse; width: 90%; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        th { background: #f0f0f0; }
    </style>
</head>
<body>

<h2>Manufacturer & Product Management</h2>

<div class="container">
    <!-- Manufacturer Form -->
    <div class="form-box">
        <h3>Add Manufacturer</h3>
        <form method="post">
            <label>Name:</label>
            <input type="text" name="manufacturer_name" required>
            <label>Address:</label>
            <input type="text" name="address" required>
            <label>Contact No:</label>
            <input type="text" name="contact_no" required>
            <input type="submit" name="add_manufacturer" value="Add Manufacturer">
        </form>
    </div>

    <!-- Product Form -->
    <div class="form-box">
        <h3>Add Product</h3>
        <form method="post">
            <label>Product Name:</label>
            <input type="text" name="product_name" required>
            <label>Price:</label>
            <input type="number" name="price" required>
            <label>Select Manufacturer:</label>
            <select name="manufacturer_id" required>
                <option value="">-- Select Manufacturer --</option>
                <?php while($m = mysqli_fetch_assoc($manufacturers)) { ?>
                    <option value="<?= $m['id'] ?>"><?= $m['name'] ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="add_product" value="Add Product">
        </form>
    </div>
</div>

<!-- Product List Table -->
<h2>Product List</h2>
<table>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Manufacturer</th>
        <th>Manufact</th>
    </tr>
    <?php while($p = mysqli_fetch_assoc($products)) { ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['pname'] ?></td>
        <td><?= $p['price'] ?></td>
        <td><?= $p['name'] ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>