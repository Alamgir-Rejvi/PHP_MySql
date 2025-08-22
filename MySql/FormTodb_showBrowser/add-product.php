<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = mysqli_connect("localhost", "root", "", "e_commerce");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand_id = $_POST['brand_id'];

    $sql = "INSERT INTO product_item (name, price, brand_id) VALUES ('$name', '$price', '$brand_id')";

    if (mysqli_query($connection, $sql)) {
        echo "<p style='color: green;'>Product inserted successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        form {
            width: 400px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid gray;
            border-radius: 10px;
        }
        label, input, select {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
        button {
            padding: 10px;
            background-color: darkgreen;
            color: white;
            border: none;
            width: 100%;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Add Product</h2>

<form method="POST" action="">
    <label>Product Name:</label>
    <input type="text" name="name" required>

    <label>Price:</label>
    <input type="number" name="price" required>

    <label>Select Brand:</label>
    <select name="brand_id" required>
        <option value="">-- Choose Brand --</option>
        <?php
        // Load brands from DB
        $conn = mysqli_connect("localhost", "root", "", "e_commerce");
        $brand_result = mysqli_query($conn, "SELECT * FROM brand");
        while ($brand = mysqli_fetch_assoc($brand_result)) {
            echo "<option value='{$brand['id']}'>{$brand['name']}</option>";
        }
        mysqli_close($conn);
        ?>
    </select>

    <button type="submit">Add Product</button>
</form>

</body>
</html>
