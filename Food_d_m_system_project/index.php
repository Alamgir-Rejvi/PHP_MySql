<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food Delivery Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #f5f6fa;
    }
    .sidebar {
      background-color: #1f1f1f;
      height: 100vh;
      color: white;
      padding-top: 20px;
      position: fixed;
      width: 240px;
    }
    .sidebar h4 {
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 40px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
      font-size: 14px;
      transition: background 0.2s;
    }
    .sidebar a:hover {
      background-color: #ff6b00;
      border-radius: 4px;
    }
    .main-content {
      margin-left: 240px;
      padding: 20px;
    }
    .card {
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4>Food Delivery<br>Management</h4>
    <a href="#"><i class="fas fa-chart-line me-2"></i> Dashboard</a>
    <a href="#"><i class="fas fa-receipt me-2"></i> Orders</a>
    <a href="#"><i class="fas fa-store me-2"></i> Restaurants</a>
    <a href="#"><i class="fas fa-users me-2"></i> Customers</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Bar -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Dashboard</h2>
      <div class="input-group" style="max-width: 250px;">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
    </div>

    <!-- Cards -->
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <h6>Total Orders</h6>
          <h3 class="fw-bold">1,205</h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <h6>Total Revenue</h6>
          <h3 class="fw-bold">$4,567</h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <h6>Total Restaurants</h6>
          <h3 class="fw-bold">87</h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow-sm p-3">
          <h6>Total Customers</h6>
          <h3 class="fw-bold">532</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
