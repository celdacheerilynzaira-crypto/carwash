<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Car Wash</title>

  <!-- ✅ Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- ✅ Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(110deg, black, white);
    }

    header {
      background-color: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
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
      transition: color 0.3s;
    }

    nav li.active a,
    nav a:hover {
      color: #d4a938;
      font-weight: bold;
    }

    .info-section {
      text-align: center;
      margin-top: 40px;
    }

    .info-section img {
      width: 250px;
      height: 250px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    footer {
      background-color: #333;
      color: #eee;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
    }

    footer a {
      color: #d4a938;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 100%;
      margin: 20px auto;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
      <p><b>CarWash Services</b></p>
    </div>
    <nav>
      <ul>
        <li class="active"><a href="Home.php">Home</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="Pricing.php">Pricing</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="../page/Authentication.php">Login</a></li>
      </ul>
    </nav>
  </header>

<!--
  <div class="video-container">
  <video controls autoplay muted loop>
    <source src="../video/cwms.mp4" type="video/mp4">
  </video>
</div>

  -->

  <!-- Info Section -->
  <div class="container info-section">
    <div class="row">
      <div class="col-sm-4">
        <img src="https://erp.shineclean-kw.com/uploads/67e89a7863aa8.jpg" alt="Service 1">
        <h2>Fast Service</h2>
        <p>We provide quick and reliable car wash services.</p>
      </div>
      <div class="col-sm-4">
        <img src="https://washhounds.com/wp-content/uploads/221806110_m_normal_none.webp" alt="Service 2">
        <h2>Eco-Friendly</h2>
        <p>Our car wash is safe for the environment.</p>
      </div>
      <div class="col-sm-4">
        <img src="https://tse4.mm.bing.net/th/id/OIP.09JvCMO7E5mJSLxhSnz7qgHaE8?pid=Api&h=220&P=0" alt="Service 3">
        <h2>Interior Cleaning</h2>
        <p>Thorough cleaning for a spotless interior.</p>
      </div>
    </div>
  </div>

  <!-- Why Choose Us -->
  <div class="container info-section why-choose">
    <h2>Why Choose Us?</h2>
    <p style="max-width:800px; margin:auto;">
      At <strong>Car Wash</strong>, we take pride in delivering top-notch service with a smile. 
      From fast exterior washes to full interior detailing, our goal is to make your car look brand new every time.
    </p>
    <div class="row" style="margin-top:30px;">
      <div class="col-sm-3">
        <i class="fas fa-users fa-2x"></i>
        <h4>Experienced Team</h4>
        <p>Our professional crew knows cars inside out.</p>
      </div>
      <div class="col-sm-3">
        <i class="fas fa-leaf fa-2x"></i>
        <h4>Premium Products</h4>
        <p>We use only high-quality, eco-friendly cleaning solutions.</p>
      </div>
      <div class="col-sm-3">
        <i class="fas fa-tags fa-2x"></i>
        <h4>Affordable Pricing</h4>
        <p>Get a sparkling clean car without breaking the bank.</p>
      </div>
      <div class="col-sm-3">
        <i class="fas fa-star fa-2x"></i>
        <h4>Customer Satisfaction</h4>
        <p>Your happiness is our #1 priority, guaranteed!</p>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div class="container info-section testimonials" style="background:#f9f9f9; padding:40px; border-radius:10px; margin-top:50px;">
    <h2>What Our Customers Say</h2>
    <div class="row" style="margin-top:30px;">
      <div class="col-sm-4">
        <blockquote>
          "Best car wash in town! My SUV looked brand new after the service."  
          <footer>– Maria S.</footer>
        </blockquote>
      </div>
      <div class="col-sm-4">
        <blockquote>
          "Friendly staff and quick service. Highly recommend to anyone in a hurry."  
          <footer>– John D.</footer>
        </blockquote>
      </div>
      <div class="col-sm-4">
        <blockquote>
          "Affordable prices and quality results. I won’t go anywhere else."  
          <footer>– Carlo P.</footer>
        </blockquote>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="info-section" style="background:#d4a938; color:white; padding:50px 20px; margin-top:50px;">
    <h2>Ready to Give Your Car a Shine?</h2>
    <p>Visit us today or book an appointment online to experience the best car wash service.</p>
    <script>
      $(document).on("click", "#BookBtn", function () {
        alert("Are You Sure, You Really Want To Book Now!..");
      });
    </script>
    <a href="contact.php" id="BookBtn" class="btn btn-dark btn-lg" style="background:#222; border:none; margin-top:15px;">
      Book Now
    </a>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
    <p>Made with ❤️ in Leyte | <a href="about.php">Go to About Us</a></p>
  </footer>

  <!-- ✅ Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>