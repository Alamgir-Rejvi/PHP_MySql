<?php
// ---------- DATABASE CONNECTION ----------
$conn = mysqli_connect("localhost", "root", "", "alibaba");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$manufacturer_list = [];
$product_list = [];
$manufacturer_table = [];

// ---------- STEP 1: Load Manufacturer List ----------
if ($result = mysqli_query($conn, "CALL get_all_manufacturers()")) {
    while ($row = mysqli_fetch_assoc($result)) {
        $manufacturer_list[] = $row;
    }
    mysqli_free_result($result);
    mysqli_next_result($conn);
}

// ---------- STEP 2: Handle Form Submission ----------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Insert Manufacturer
    if (isset($_POST['add_manufacturer'])) {
        $name = $_POST['manufacturer_name'];
        $address = $_POST['address'];
        $contact = $_POST['contact_no'];

        if (!empty($name) && !empty($address) && !empty($contact)) {
            $stmt = $conn->prepare("CALL insert_manufacturer(?, ?, ?)");
            $stmt->bind_param("sss", $name, $address, $contact);
            $stmt->execute();
            $stmt->close();
            mysqli_next_result($conn);
        }
    }

    // Insert Product (Price must be > 5000)
    if (isset($_POST['add_product'])) {
        $product_name = $_POST['product_name'];
        $price = intval($_POST['price']);
        $manufacturer_id = $_POST['manufacturer_id'];

        if (!empty($product_name) && !empty($price) && !empty($manufacturer_id)) {
            if ($price <= 5000) {
                echo "<script>alert('Price must be more than 5000');</script>";
            } else {
                $stmt = $conn->prepare("CALL insert_product(?, ?, ?)");
                $stmt->bind_param("sii", $product_name, $price, $manufacturer_id);
                $stmt->execute();
                $stmt->close();
                mysqli_next_result($conn);
            }
        }
    }

    // Delete Manufacturer
    if (isset($_POST['delete_manufacturer'])) {
        $mid = intval($_POST['delete_manufacturer_id']);
        if (!empty($mid)) {
            mysqli_query($conn, "CALL delete_manufacturer_by_id($mid)");
            mysqli_next_result($conn);
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// ---------- STEP 3: Handle Product Deletion ----------
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    mysqli_query($conn, "CALL delete_product_by_id($id)");
    mysqli_next_result($conn);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// ---------- STEP 4: Load Product List from VIEW ----------
if ($result = mysqli_query($conn, "SELECT * FROM view_all_products_only")) {
    while ($row = mysqli_fetch_assoc($result)) {
        $product_list[] = $row;
    }
    mysqli_free_result($result);
}

// ---------- STEP 5: Load Full Manufacturer Table ----------
if ($result = mysqli_query($conn, "SELECT * FROM manufacturer")) {
    while ($row = mysqli_fetch_assoc($result)) {
        $manufacturer_table[] = $row;
    }
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manufacturer and Product Entry</title>
    <style>
        body { font-family: Arial; background: #f9f9f9; }
        .container { display: flex; justify-content: space-around; margin-top: 30px; flex-wrap: wrap; gap: 20px; }
        .form-box { width: 45%; min-width: 350px; background: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h2, h3 { text-align: center; }
        input, select { width: 100%; padding: 8px; margin: 8px 0; }
        input[type=submit] { background: #4CAF50; color: white; border: none; cursor: pointer; font-weight: bold; }
        input[type=submit]:hover { background: #45a049; }
        table { margin: 30px auto; border-collapse: collapse; width: 95%; background: #fff; }
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
            <label>Price (must be > 5000):</label>
            <input type="number" name="price" required> 
            <label>Select Manufacturer:</label>
            <select name="manufacturer_id" required>
                <option value="">-- Select Manufacturer --</option>
                <?php foreach($manufacturer_list as $m): ?>
                    <option value="<?= $m['id'] ?>"><?= $m['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="add_product" value="Add Product">
        </form>
    </div>
</div>

<!-- Manufacturer Delete Form -->
<h2>Delete Manufacturer</h2>
<form method="post" style="width: 400px; margin: auto; background: #fff; padding: 20px; border-radius: 10px;">
    <label>Select Manufacturer to Delete:</label>
    <select name="delete_manufacturer_id" required>
        <option value="">-- Select Manufacturer --</option>
        <?php foreach($manufacturer_list as $m): ?>
            <option value="<?= $m['id'] ?>"><?= $m['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="delete_manufacturer" value="Delete Manufacturer" style="margin-top: 10px;">
</form>

<!-- Product Table -->
<h2>Product List (Price > 5000)</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Manufacturer</th>
        <th>Action</th>
    </tr>
    <?php foreach($product_list as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['pname'] ?></td>
        <td><?= $p['price'] ?></td>
        <td><?= $p['manufacturer_name'] ?></td>
        <td><a href="index.php?delete_id=<?= $p['id'] ?>" onclick="return confirm('Are you sure to delete this product?')">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Manufacturer Table -->
<h2>All Manufacturers</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact No</th>
    </tr>
    <?php foreach($manufacturer_table as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= $m['name'] ?></td>
        <td><?= $m['address'] ?></td>
        <td><?= $m['contact_no'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>