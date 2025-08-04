<?php

include("includes/auth.php");
include("includes/header.php");
include("includes/sidebar.php");




// Example stats
include("../includes/db.php");

$total_users = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM users"))['count'];
$total_restaurants = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM restaurants"))['count'];
$total_orders = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM orders"))['count'];
?>

<h3>Welcome, <?= $_SESSION['admin_name'] ?> 👋</h3>

<div class="row mt-4">
  <div class="col-md-4">
    <div class="card bg-info text-white">
      <div class="card-body">
        <h5>Total Users</h5>
        <p><?= $total_users ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card bg-success text-white">
      <div class="card-body">
        <h5>Total Restaurants</h5>
        <p><?= $total_restaurants ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card bg-warning text-dark">
      <div class="card-body">
        <h5>Total Orders</h5>
        <p><?= $total_orders ?></p>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
