<?php
include "db_connect.php";

if (isset($_GET['type']) && isset($_GET['id'])) {
    $type = $_GET['type'];
    $id = intval($_GET['id']);

    if ($type == "manufacturer") {
        $sql = "DELETE FROM Manufacturer WHERE id = $id";
    } elseif ($type == "product") {
        $sql = "DELETE FROM Product WHERE id = $id";
    }

    if (mysqli_query($connection, $sql)) {
        header("Location: insert_delete.php");
    } else {
        echo "Delete failed: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($connection);
?>
