<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Car Wash</title>

  <!-- ✅ Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: white;
    }

    /* --- Header & Navigation --- */
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

    /* --- Carousel --- */
    .carousel-inner img {
      width: 100%;
      height: 550px; /* consistent height */
      object-fit: cover; /* prevent distortion */
    }

    .carousel-caption {
      background: rgba(0, 0, 0, 0.4);
      padding: 15px;
      border-radius: 5px;
    }

    @media (max-width: 768px) {
      .carousel-inner img {
        height: 300px;
      }
    }

    /* --- Sections --- */
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
      background-color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #555;
      margin-top: 40px;
      border-top: 1px solid #ddd;
    }
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
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="pricing.php">Pricing</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://sdmntpraustraliaeast.oaiusercontent.com/files/00000000-0768-61fa-a001-6710b60e40e7/raw?se=2025-09-01T02%3A02%3A09Z&sp=r&sv=2024-08-04&sr=b&scid=a697647d-c423-51b5-9ac0-54a0137b9984&skoid=cb94e22a-e3df-4e6a-9e17-1696f40fa435&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-09-01T00%3A48%3A37Z&ske=2025-09-02T00%3A48%3A37Z&sks=b&skv=2024-08-04&sig=Ogt1jiMqHPcnoQBkCue8wjS%2B0gaZ/zqNh8n00GMPiFk%3D" alt="Carwash Facility">
        <div class="carousel-caption">
          <h3 style="font-size:40px">Carwash Facility</h3>
          <p style="color:white; font-size:20px">Quality Service Guaranteed</p>
        </div>
      </div>

      <div class="item">
        <img src="https://s25180.pcdn.co/wp-content/uploads/2017/08/DSC_0402.jpg" alt="Team">
        <div class="carousel-caption">
          <h3>Professional Team</h3>
        </div>
      </div>

      <div class="item">
        <img src="https://cdn.hibuwebsites.com/1c7212e82bd542d0ba34bf77a0880234/dms3rep/multi/regency-car-wash-content-car-wash-pricing-01.jpg" alt="Pricing">
        <div class="carousel-caption">
          <h3>Affordable Pricing</h3>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>

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