<?php
// Pricing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash Services</title>

  <!-- ✅ Bootstrap CSS & Icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #fdfdfd, #f9f9f9);
    }

    /* --- Header --- */
    header {
      background: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #eee;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .logo img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }
    nav a {
      text-decoration: none;
      color: #333;
      padding: 5px 10px;
      transition: 0.3s;
    }
    nav li.active a,
    nav a:hover {
      color: #d4a938;
      font-weight: bold;
    }

    /* --- Section Titles --- */
    h2.section-title {
      margin-bottom: 40px;
      font-size: 28px;
      text-align: center;
      font-weight: bold;
      color: #333;
    }

    /* --- Pricing Cards --- */
    .panel {
      transition: transform 0.3s, box-shadow 0.3s;
      border-radius: 10px;
      overflow: hidden;
    }
    .panel:hover {
      transform: translateY(-10px);
      box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
    }
    .panel-heading {
      font-size: 20px;
      font-weight: bold;
    }
    .panel-body p {
      margin: 8px 0;
    }
    .badge-best {
      background: #ff9800;
      color: #fff;
      font-size: 12px;
      padding: 5px 8px;
      border-radius: 5px;
      margin-left: 10px;
    }

    /* --- Additional Services --- */
    .service-card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      width: 220px;
      margin: 10px;
      text-align: center;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }
    .service-card:hover {
      transform: scale(1.05);
    }
    .service-card i {
      font-size: 30px;
      color: #d4a938;
      margin-bottom: 10px;
    }
    .service-card .price {
      font-size: 18px;
      font-weight: bold;
      color: #d4a938;
    }

    /* --- Flipcards --- */
    .flipcard-container {
      perspective: 1000px;
      width: 250px;
      margin: 20px;
    }
    .flipcard {
      position: relative;
      width: 100%;
      height: 250px;
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }
    .flipcard-container:hover .flipcard {
      transform: rotateY(180deg);
    }
    .flipcard-front, .flipcard-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 20px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
    }
    .flipcard-front {
      background: #fff;
    }
    .flipcard-back {
      transform: rotateY(180deg);
      background: #fef7e0;
    }

    /* --- Footer --- */
    footer {
      background: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="your-logo.jpg" alt="Car Wash Logo">
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li class="active"><a href="pricing.php">Pricing</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- Pricing Section -->
  <main class="container pricing-section">
    <h2 class="section-title">Pricing & Packages</h2>
    <div class="row">

      <!-- Basic Wash -->
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background-color:#d4a938; color:white;">
            <h3><i class="fas fa-car"></i> Basic Wash</h3>
          </div>
          <div class="panel-body">
            <p><strong>₱150</strong></p>
            <p>Exterior Wash</p>
            <p>Tire Cleaning</p>
            <p>Quick Dry</p>
          </div>
          <div class="panel-footer">
            <a href="contact.php" class="btn btn-warning">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Premium Wash -->
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background-color:#333; color:white;">
            <h3><i class="fas fa-gem"></i> Premium Wash <span class="badge-best">Best Deal</span></h3>
          </div>
          <div class="panel-body">
            <p><strong>₱300</strong></p>
            <p>Exterior & Interior Wash</p>
            <p>Vacuuming</p>
            <p>Wax Finish</p>
          </div>
          <div class="panel-footer">
            <a href="contact.php" class="btn btn-warning">Book Now</a>
          </div>
        </div>
      </div>

      <!-- VIP Package -->
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background-color:#444; color:white;">
            <h3><i class="fas fa-crown"></i> VIP Package</h3>
          </div>
          <div class="panel-body">
            <p><strong>₱500</strong></p>
            <p>Full Detailing</p>
            <p>Interior Deep Clean</p>
            <p>Free Air Freshener</p>
          </div>
          <div class="panel-footer">
            <a href="contact.php" class="btn btn-warning">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Services -->
    <section class="additional-services">
      <h2 class="section-title">Additional Services</h2>
      <div class="service-row">
        <div class="service-card"><i class="fas fa-spray-can"></i><h3>Exterior Wash</h3><div class="price">₱200</div></div>
        <div class="service-card"><i class="fas fa-vacuum"></i><h3>Interior Vacuum</h3><div class="price">₱300</div></div>
        <div class="service-card"><i class="fas fa-car-side"></i><h3>Tire Shine</h3><div class="price">₱150</div></div>
      </div>

      <div class="flipcard-row text-center">
        <div class="flipcard-container">
          <div class="flipcard">
            <div class="flipcard-front">
              <h3>Waxing</h3>
              <button class="btn btn-warning">₱500</button>
            </div>
            <div class="flipcard-back">
              <p>Protect your car’s paint and give it a long-lasting shine.</p>
            </div>
          </div>
        </div>

        <div class="flipcard-container">
          <div class="flipcard">
            <div class="flipcard-front">
              <h3>Headlight Restoration</h3>
              <button class="btn btn-warning">₱450</button>
            </div>
            <div class="flipcard-back">
              <p>Improve visibility and make headlights look brand new.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Car Wash. All rights reserved.</p>
  </footer>

  <!-- ✅ Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>