<?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "cwms_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle delete request
    if (isset($_GET['delete_id'])) {
        $delete_id = intval($_GET['delete_id']);
        $stmt = $conn->prepare("DELETE FROM contact_messages_tb WHERE id = ?");
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();
        header("Location:../page/booking.php?deleted=1");
        exit;
    }

    // Fetch message data for modal view
    $messageData = null;
    if (isset($_GET['msg_id'])) {
        $msg_id = intval($_GET['msg_id']);
        $stmt = $conn->prepare("SELECT * FROM contact_messages_tb WHERE id = ?");
        $stmt->bind_param("i", $msg_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $messageData = $result->fetch_assoc();
    }
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
            <!-- ✅ Bootstrap JS (includes Popper for modals, tooltips, etc.) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
                <a href="../page/admin_dashboard.php"><i class="fa-solid fa-home me-2"></i> Dashboard</a>
                <a href="../page/admin_bookings.php" class="active"><i class="fa-solid fa-calendar-check me-2"></i> Bookings</a>
                <a href="../page/admin_services.php"><i class="fa-solid fa-tags me-2"></i> Services</a>
                <a href="../page/admin_customers.php"><i class="fa-solid fa-users me-2"></i> Customers</a>
                <a href="../page/admin_staff.php"><i class="fa-solid fa-user-tie me-2"></i> Staff</a>
                <a href="../page/admin_reviews.php"><i class="fa-solid fa-star me-2"></i> Reviews</a>
                <a href="../page/admin_gallery.php"><i class="fa-solid fa-image me-2"></i> Gallery</a>
                <a href="../page/admin_messages.php"><i class="fa-solid fa-envelope me-2"></i> Messages</a>
                <a href="../page/admin_reports.php"><i class="fa-solid fa-chart-bar me-2"></i> Reports</a>
                <a href="../page/admin_settings.php"><i class="fa-solid fa-cog me-2"></i> Settings</a>
            </aside>
            <?php
// Example dataset (in real use: from database)
$bookings = [
    [
        "id" => 1,
        "name" => "Juan Dela Cruz",
        "contact" => "09123456789",
        "car" => "Toyota Vios - 2019",
        "service" => "Full Wash + Underwash",
        "date" => "2025-09-05 09:00 AM",
        "message" => "Pwede ba ako magpa-booking ng 9AM? Gusto ko sana malinis pati ilalim ng sasakyan.",
        "status" => isset($_GET['seen']) && $_GET['seen'] == 1 ? "Viewed" : "Pending"
    ],
    [
        "id" => 2,
        "name" => "Maria Santos",
        "contact" => "09987654321",
        "car" => "Honda CR-V - 2021",
        "service" => "Interior Deep Cleaning",
        "date" => "2025-09-06 02:00 PM",
        "message" => "Medyo madumi na loob ng sasakyan ko, paki-focus po sa carpet at dashboard.",
        "status" => isset($_GET['seen']) && $_GET['seen'] == 2 ? "Viewed" : "Pending"
    ],
    [
        "id" => 3,
        "name" => "Carlos Mendoza",
        "contact" => "09112223333",
        "car" => "Mitsubishi Mirage - 2017",
        "service" => "Premium Wax & Polish",
        "date" => "2025-09-07 11:30 AM",
        "message" => "Gusto ko sana magmukhang bago ulit yung kotse ko. Pwede ba lagyan ng premium wax?",
        "status" => isset($_GET['seen']) && $_GET['seen'] == 3 ? "Viewed" : "Pending"
    ]
];
?>
<?php if (isset($_GET['deleted'])): ?>
        <div class="alert alert-success">Inquiry deleted successfully.</div>
    <?php endif; ?>

<div class="card-custom">
    <h2>📅 Customer Bookings</h2>
    <p class="text-muted">Manage all booking requests with full customer details and status tracking.</p>

    <div class="row g-4 mt-2">
        <?php foreach ($bookings as $booking): ?>
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header d-flex justify-content-between align-items-center bg-dark text-white">
                    <strong><?= htmlspecialchars($booking['name']) ?></strong>
                    
                    <?php if ($booking['status'] == "Pending"): ?>
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#messageModal<?= $booking['id'] ?>">
                            View Message
                        </button>
                    <?php elseif ($booking['status'] == "Viewed"): ?>
                        <span class="badge bg-info">Viewed</span>
                    <?php elseif ($booking['status'] == "Completed"): ?>
                        <span class="badge bg-success">Completed</span>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <p><strong>🚘 Car:</strong> <?= htmlspecialchars($booking['car']) ?></p>
                    <p><strong>🛠 Service:</strong> <?= htmlspecialchars($booking['service']) ?></p>
                    <p><strong>📅 Schedule:</strong> <?= htmlspecialchars($booking['date']) ?></p>
                    <p><strong>📞 Contact:</strong> <?= htmlspecialchars($booking['contact']) ?></p>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <?php if ($booking['status'] == "Viewed"): ?>
                        <a href="?action=complete&id=<?= $booking['id'] ?>" class="btn btn-success btn-sm me-2">Mark as Completed</a>
                    <?php endif; ?>
                    <a href="?action=delete&id=<?= $booking['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>

        <!-- Modal for Message -->
        <div class="modal fade" id="messageModal<?= $booking['id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">📩 Message from <?= htmlspecialchars($booking['name']) ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>🚘 Car:</strong> <?= htmlspecialchars($booking['car']) ?></p>
                        <p><strong>🛠 Service Requested:</strong> <?= htmlspecialchars($booking['service']) ?></p>
                        <p><strong>💬 Customer Message:</strong><br>
                            <span class="text-muted fst-italic">"<?= htmlspecialchars($booking['message']) ?>"</span>
                        </p>
                        <p class="text-end"><small class="text-secondary">📅 Requested on <?= htmlspecialchars($booking['date']) ?></small></p>
                    </div>
                    <div class="modal-footer">
                        <a href="bookings.php?seen=<?= $booking['id'] ?>" class="btn btn-success">Mark as Seen</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div> <!-- end of card-custom -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>