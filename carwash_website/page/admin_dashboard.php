<?php
class DashboardPage {
    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Car Wash Admin Dashboard</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <style>
                body { background: #f4f6f9; font-family: 'Segoe UI', sans-serif; }
                .sidebar { width: 260px; background: #1e1e2d; height: 100vh; }
                .sidebar a { color: #ccc; padding: 12px; display: block; border-radius: 8px; text-decoration: none; }
                .sidebar a:hover { background: #343454; color: #fff; }
                .sidebar .active { background: #d4a938; color: #fff; font-weight: bold; }
                .card-custom { background: #fff; border: none; border-radius: 15px; box-shadow: 0px 4px 15px rgba(0,0,0,0.1); }
                .card-custom h3 { color: #1e1e2d; }
                .navbar { background: linear-gradient(90deg, #1e1e2d, #d4a938); }
                .navbar-brand, .navbar-nav .nav-link { color: #fff !important; }
                .logo img {
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                    object-fit: cover;
                }

                /* 🎨 Fancy Buttons */
                .action-btn {
                    border: none;
                    border-radius: 50px;
                    padding: 12px 20px;
                    font-weight: 600;
                    font-size: 15px;
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                }
                .action-btn i {
                    font-size: 18px;
                }
                .action-btn:hover {
                    transform: translateY(-3px) scale(1.05);
                    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
                }
                .btn-add {
                    background: linear-gradient(45deg, #007bff, #00c6ff);
                    color: #fff;
                }
                .btn-service {
                    background: linear-gradient(45deg, #28a745, #5ddf80);
                    color: #fff;
                }
                .btn-reply {
                    background: linear-gradient(45deg, #ffc107, #ffdd57);
                    color: #000;
                }
                .btn-report {
                    background: linear-gradient(45deg, #dc3545, #ff6b6b);
                    color: #fff;
                }
            </style>
        </head>
        <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                    <div class="logo">
                        <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
                    </div>
                    🚘 CarWash Dashboard
                </a>
                <div class="ms-auto d-flex align-items-center gap-3">
                    <a href="#" class="text-white"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="text-white"><i class="fa-solid fa-user-circle"></i> Admin</a>
                    <li class="nav-item text-nowrap">
            <a class="nav-link" href="../page/logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign out
            </a>
        </li>
                </div>
            </div>
        </nav>

        <div class="d-flex">
            <!-- Sidebar -->
            <aside class="sidebar p-3">
                <h5 class="text-white mb-4">Navigation</h5>
                <a href="../page/admin_dashboard.php" class="active"><i class="fa-solid fa-home me-2"></i> Dashboard</a>
                <a href="../page/bookings.php"><i class="fa-solid fa-calendar-check me-2"></i> Bookings</a>
                <a href="../page/admin_services.php"><i class="fa-solid fa-tags me-2"></i> Services</a>
                <a href="../page/customers.php"><i class="fa-solid fa-users me-2"></i> Customers</a>
                <a href="../page/staff.php"><i class="fa-solid fa-user-tie me-2"></i> Staff</a>
                <a href="../page/reviews.php"><i class="fa-solid fa-star me-2"></i> Reviews</a>
                <a href="../page/gallery.php"><i class="fa-solid fa-image me-2"></i> Gallery</a>
                <a href="../page/messages.php"><i class="fa-solid fa-envelope me-2"></i> Messages</a>
                <a href="../page/reports.php"><i class="fa-solid fa-chart-bar me-2"></i> Reports</a>
                <a href="../page/settings.php"><i class="fa-solid fa-cog me-2"></i> Settings</a>
            </aside>

            <!-- Main Content -->
            <main class="flex-grow-1 p-4">
                <h2 class="fw-bold mb-4">📊 Dashboard Overview</h2>

                <!-- Stats -->
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card card-custom text-center p-3">
                            <h5>Total Bookings</h5>
                            <h3>124</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-custom text-center p-3">
                            <h5>Revenue (This Month)</h5>
                            <h3>$5,430</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-custom text-center p-3">
                            <h5>Active Customers</h5>
                            <h3>86</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-custom text-center p-3">
                            <h5>Pending Messages</h5>
                            <h3>7</h3>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="row g-4 mt-4">
                    <div class="col-md-8">
                        <div class="card card-custom p-3">
                            <h5 class="fw-bold">📈 Revenue Trends</h5>
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom p-3">
                            <h5 class="fw-bold">🚗 Popular Services</h5>
                            <canvas id="serviceChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Recent Bookings & Reviews -->
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="card card-custom p-3">
                            <h5 class="fw-bold">📝 Recent Bookings</h5>
                            <table class="table table-striped align-middle">
                                <thead class="table-dark">
                                    <tr><th>ID</th><th>Customer</th><th>Service</th><th>Status</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>#1001</td><td>Maria S.</td><td>Interior Cleaning</td><td><span class="badge bg-success">Completed</span></td></tr>
                                    <tr><td>#1002</td><td>John D.</td><td>Full Wash</td><td><span class="badge bg-warning text-dark">Pending</span></td></tr>
                                    <tr><td>#1003</td><td>Alex T.</td><td>Wax + Polish</td><td><span class="badge bg-info text-dark">In Service</span></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-custom p-3">
                            <h5 class="fw-bold">⭐ Latest Reviews</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">"Amazing service!" – <b>Maria</b> ⭐⭐⭐⭐⭐</li>
                                <li class="list-group-item">"Fast & affordable." – <b>John</b> ⭐⭐⭐⭐</li>
                                <li class="list-group-item">"Best car wash in town!" – <b>Alex</b> ⭐⭐⭐⭐⭐</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card card-custom p-3 mt-4">
                    <h5 class="fw-bold">⚡ Quick Actions</h5>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="action-btn btn-add"><i class="fa-solid fa-plus"></i> Add Booking</button>
                        <button class="action-btn btn-service"><i class="fa-solid fa-plus-circle"></i> Add Service</button>
                        <button class="action-btn btn-reply"><i class="fa-solid fa-reply"></i> Reply Message</button>
                        <button class="action-btn btn-report"><i class="fa-solid fa-download"></i> Generate Report</button>
                    </div>
                </div>

            </main>
        </div>

        <script>
        // Revenue Chart
        const ctx = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug"],
                datasets: [{
                    label: 'Revenue ($)',
                    data: [3000, 4200, 3500, 5000, 6200, 5800, 7000, 7430],
                    borderColor: '#d4a938',
                    backgroundColor: 'rgba(212,169,56,0.2)',
                    fill: true,
                    tension: 0.4
                }]
            }
        });

        // Services Chart
        const ctx2 = document.getElementById('serviceChart').getContext('2d');
        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ["Full Wash", "Interior", "Wax + Polish", "Detailing"],
                datasets: [{
                    data: [40, 25, 20, 15],
                    backgroundColor: ["#1e90ff","#28a745","#d4a938","#ff4d4d"]
                }]
            }
        });
        </script>
        </body>
        </html>
        <?php
    }
}

$page = new DashboardPage();
$page->render();
?>