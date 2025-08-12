<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            min-height: 100vh;
            background: #343a40;
            color: #fff;
        }
        .sidebar .nav-link {
            color: #ddd;
        }
        .sidebar .nav-link.active {
            background-color: #495057;
            color: #fff;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }
        .sidebar .nav-item .collapse .nav-link {
            padding-left: 2rem;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" id="sidebarMenu">
            <div class="position-sticky p-3">
                <h4 class="text-white">Admin Panel</h4>
                <ul class="nav flex-column">

                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">📊 Dashboard</a>
                    </li>

                    <!-- User Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#userManagement" role="button" aria-expanded="false">👥 User Management</a>
                        <div class="collapse" id="userManagement">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Customers</a></li>
                                <li><a class="nav-link" href="#">Delivery Personnel</a></li>
                                <li><a class="nav-link" href="#">Restaurants</a></li>
                                <li><a class="nav-link" href="#">Admins & Roles</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Restaurant Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#restaurantManagement">🏪 Restaurant Management</a>
                        <div class="collapse" id="restaurantManagement">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">All Restaurants</a></li>
                                <li><a class="nav-link" href="#">Categories / Types</a></li>
                                <li><a class="nav-link" href="#">Availability & Status</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Food & Menu -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#foodMenu">🍔 Food & Menu</a>
                        <div class="collapse" id="foodMenu">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Food Items</a></li>
                                <li><a class="nav-link" href="#">Food Categories</a></li>
                                <li><a class="nav-link" href="#">Add-ons / Extras</a></li>
                                <li><a class="nav-link" href="#">Pricing & Offers</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Orders -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#orders">🛒 Orders</a>
                        <div class="collapse" id="orders">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">New Orders</a></li>
                                <li><a class="nav-link" href="#">Processing</a></li>
                                <li><a class="nav-link" href="#">Completed</a></li>
                                <li><a class="nav-link" href="#">Cancelled</a></li>
                                <li><a class="nav-link" href="#">Refund Requests</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Delivery -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#delivery">🚚 Delivery Management</a>
                        <div class="collapse" id="delivery">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Assign Deliveries</a></li>
                                <li><a class="nav-link" href="#">Live Tracking</a></li>
                                <li><a class="nav-link" href="#">Delivery Zones</a></li>
                                <li><a class="nav-link" href="#">Rider Performance</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Finance -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#finance">💰 Finance</a>
                        <div class="collapse" id="finance">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Transactions</a></li>
                                <li><a class="nav-link" href="#">Commission Reports</a></li>
                                <li><a class="nav-link" href="#">Payments to Restaurants</a></li>
                                <li><a class="nav-link" href="#">Rider Payouts</a></li>
                                <li><a class="nav-link" href="#">Coupons & Discounts</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Reviews -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#reviews">⭐ Reviews & Feedback</a>
                        <div class="collapse" id="reviews">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Customer Reviews</a></li>
                                <li><a class="nav-link" href="#">Restaurant Ratings</a></li>
                                <li><a class="nav-link" href="#">Rider Ratings</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Reports -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#reports">📈 Reports & Analytics</a>
                        <div class="collapse" id="reports">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Sales Report</a></li>
                                <li><a class="nav-link" href="#">Top Selling Foods</a></li>
                                <li><a class="nav-link" href="#">Best Performing Restaurants</a></li>
                                <li><a class="nav-link" href="#">Delivery Performance</a></li>
                                <li><a class="nav-link" href="#">Customer Activity</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Settings -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#settings">⚙ System Settings</a>
                        <div class="collapse" id="settings">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">General Settings</a></li>
                                <li><a class="nav-link" href="#">Email & SMS</a></li>
                                <li><a class="nav-link" href="#">Payment Gateway</a></li>
                                <li><a class="nav-link" href="#">Tax & Delivery Charges</a></li>
                                <li><a class="nav-link" href="#">API Integrations</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Support -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#support">📨 Support & Logs</a>
                        <div class="collapse" id="support">
                            <ul class="nav flex-column ms-3">
                                <li><a class="nav-link" href="#">Notifications</a></li>
                                <li><a class="nav-link" href="#">Support Tickets</a></li>
                                <li><a class="nav-link" href="#">Activity Logs</a></li>
                                <li><a class="nav-link" href="#">Backup & Restore</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h1>Welcome to the Admin Panel</h1>
            <p>Select a menu option from the sidebar to get started.</p>
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
