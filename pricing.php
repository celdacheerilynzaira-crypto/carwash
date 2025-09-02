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
  <link rel="stylesheet" href="../styles/pricing_style.css"> <!-- external CSS -->

  <style>
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
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
      <div class="col-sm-3">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background:linear-gradient(to right,#d4a938,#f0c54f); color:white;">
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
      <div class="col-sm-3">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background:linear-gradient(to right,#333,#555); color:white;">
            <h3><i class="fas fa-gem"></i> Premium <span class="badge-best">Best Deal</span></h3>
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
      <div class="col-sm-3">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background:linear-gradient(to right,#444,#666); color:white;">
            <h3><i class="fas fa-crown"></i> VIP</h3>
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

      <!-- Elite Package -->
      <div class="col-sm-3">
        <div class="panel panel-default text-center">
          <div class="panel-heading" style="background:linear-gradient(to right,#000,#444); color:white;">
            <h3><i class="fas fa-star"></i> Elite Detailing</h3>
          </div>
          <div class="panel-body">
            <p><strong>₱1000</strong></p>
            <p>Ceramic Coating</p>
            <p>Engine Cleaning</p>
            <p>Complete Interior Shampoo</p>
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
        <div class="service-card"><i class="fas fa-wind"></i><h3>Interior Vacuum</h3><div class="price">₱300</div></div>
        <div class="service-card"><i class="fas fa-car-side"></i><h3>Tire Shine</h3><div class="price">₱150</div></div>
        <div class="service-card"><i class="fas fa-brush"></i><h3>Polishing</h3><div class="price">₱400</div></div>
        <div class="service-card"><i class="fas fa-oil-can"></i><h3>Engine Cleaning</h3><div class="price">₱600</div></div>
        <div class="service-card"><i class="fas fa-shield-alt"></i><h3>Ceramic Coating</h3><div class="price">₱1200</div></div>
      </div>

      <!-- Flipcards -->
      <div class="flipcard-row">
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

        <div class="flipcard-container">
          <div class="flipcard">
            <div class="flipcard-front">
              <h3>Interior Shampoo</h3>
              <button class="btn btn-warning">₱700</button>
            </div>
            <div class="flipcard-back">
              <p>Deep clean fabric seats and carpets for a fresh interior.</p>
            </div>
          </div>
        </div>

        <div class="flipcard-container">
          <div class="flipcard">
            <div class="flipcard-front">
              <h3>Underchassis Wash</h3>
              <button class="btn btn-warning">₱350</button>
            </div>
            <div class="flipcard-back">
              <p>Removes dirt and grime build-up under your car to prevent rust.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Car Wash. All rights reserved.</p>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </footer>

  <!-- ✅ Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>