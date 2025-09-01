<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash Services</title>
  <style>
    /* General Styles */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background: #f4faff;
      color: #333;
    }
    .logo img {
      max-height: 60px;
      width: 70px;       /* make it square */
      height: 50px;      /* keep same as width */
      border-radius: 50%; /* makes it circular */
      object-fit: cover;  /* ensures image fits inside circle */
    }

    /* --- Header & Navigation --- */
    header {
      background-color: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
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

    /* --- Main Content --- */
    main {
      padding: 20px;
    }
    /* Hero Section */
    .hero {
      text-align: center;
      padding: 100px 20px;
      background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1600&q=80') no-repeat center/cover;
      color: white;
      position: relative;
    }
    .hero::after {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.5);
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }
    .btn {
      padding: 12px 25px;
      background: #ffdb4d;
      color: #333;
      border: none;
      cursor: pointer;
      border-radius: 25px;
      font-size: 16px;
      transition: 0.3s;
    }
    .btn:hover {
      background: #ffc107;
      transform: scale(1.05);
    }

    /* Section Styling */
    .section {
      padding: 70px 20px;
      text-align: center;
    }
    .section h2 {
      font-size: 32px;
      margin-bottom: 20px;
      color: #0077cc;
    }

    /* Pricing */
    .pricing table {
      margin: auto;
      border-collapse: collapse;
      width: 80%;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .pricing th, .pricing td {
      border: 1px solid #ddd;
      padding: 20px;
      text-align: center;
    }
    .pricing th {
      background: #0077cc;
      color: white;
    }
    .pricing td button {
      background: #0077cc;
      color: white;
      border-radius: 5px;
    }
    .pricing td button:hover {
      background: #005fa3;
    }

    /* Testimonials */
    .testimonials {
      background: #fff;
      margin: 40px auto;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      max-width: 900px;
    }
    .testimonial {
      font-style: italic;
      margin: 15px 0;
    }

    /* Gallery */
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }
    .gallery img {
      width: 250px;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
      transition: 0.3s;
    }
    .gallery img:hover {
      transform: scale(1.05);
    }

    /* Why Choose Us */
    .why-choose ul {
      list-style: none;
      padding: 0;
      font-size: 18px;
    }
    .why-choose li {
      margin: 10px 0;
      padding: 10px;
      background: #e6f4ff;
      border-radius: 8px;
    }

    /* Footer */
    footer {
      background: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    /* Responsive */
    @media(max-width: 768px) {
      .hero h1 { font-size: 32px; }
      .pricing table { width: 100%; }
      .gallery img { width: 100%; max-width: 300px; }
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
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="services.php">Services</a></li>
        <li><a href="pricing.php">Pricing</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-content">
      <h1>Shine Like New</h1>
      <p>Premium Car Wash & Detailing Services</p>
      <button class="btn">Learn More</button>
    </div>
  </section>

  <!-- Pricing -->
  <section class="section pricing">
    <h2>Our Packages</h2>
    <table>
      <tr>
        <th>Package</th>
        <th>Features</th>
        <th>Price</th>
        <th></th>
      </tr>
      <tr>
        <td>Basic Wash</td>
        <td>Exterior Wash</td>
        <td>$15</td>
        <td><button class="btn">Book Now</button></td>
      </tr>
      <tr>
        <td>Premium Wash</td>
        <td>Exterior + Interior</td>
        <td>$30</td>
        <td><button class="btn">Book Now</button></td>
      </tr>
      <tr>
        <td>Detailing</td>
        <td>Deep Cleaning & Wax</td>
        <td>$60</td>
        <td><button class="btn">Book Now</button></td>
      </tr>
    </table>
  </section>

  <!-- Testimonials -->
  <section class="section testimonials">
    <h2>What Our Customers Say</h2>
    <p class="testimonial">⭐ ⭐ ⭐ ⭐ ⭐ - "Amazing service! My car looks brand new!"</p>
    <p class="testimonial">⭐ ⭐ ⭐ ⭐ - "Fast, friendly, and affordable. Highly recommend!"</p>
  </section>

  <!-- Gallery -->
  <section class="section gallery-section">
    <h2>Gallery</h2>
    <div class="gallery">
      <img src="https://scontent.fceb6-1.fna.fbcdn.net/v/t1.15752-9/539612241_1544277959876435_7275495662812764553_n.png?_nc_cat=105&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGvPgymuGNCKROVl0O85vbZj8UyC--aNYqPxTIL75o1itoUJEMD4hWqmlNyCJsEV8RfOBgn4qVJ1jaUInBepeZT&_nc_ohc=VYNye6hHZJoQ7kNvwE0IES4&_nc_oc=AdkhzW14LKe1W2xkdnAxaOpU9YjpxsoduVX7qbxaEUk2gcbVEfevw3CDg4mk5y1mnPc&_nc_zt=23&_nc_ht=scontent.fceb6-1.fna&oh=03_Q7cD3AEGoCqexn9PevgoWaBajAyALEXbv0Tiesg3FqstIjMA9w&oe=68DC7B91" alt="Before Wash">
      <img src="https://scontent.fceb6-4.fna.fbcdn.net/v/t1.15752-9/541023881_676123538829244_5268055227269557338_n.png?_nc_cat=111&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeHqmePFR8eosaT2NALAGty0MsFxSyK7hrUywXFLIruGtZWB2xqT0yIIgztnOzPuv32Zo3PryCurA-Dx32wVJO5G&_nc_ohc=E80Nl1hIA9wQ7kNvwH6fPZe&_nc_oc=Adlxotfczu3q8ogkSARsYxA_Lp2wVn69ZJ1Z5Ia9M8fKvcvBuDS23rsjKsuNvg9OSsc&_nc_zt=23&_nc_ht=scontent.fceb6-4.fna&oh=03_Q7cD3AGsWmL8P-ArdCQDCqMzxaT5TC7CPvPSyEGkSEMsEykd3A&oe=68DC6AB2" alt="After Wash">
      <img src="https://www.goodsight.com.au/wp-content/uploads/2022/08/car-wash-installation-parkes-1d.jpg" alt="Car Wash Facility">
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="section why-choose">
    <h2>Why Choose Us?</h2>
    <ul>
      <li>✔ Eco-friendly products</li>
      <li>✔ Experienced staff</li>
      <li>✔ Convenient location</li>
      <li>✔ Affordable prices</li>
    </ul>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Car Wash. All rights reserved.</p>
  </footer>

</body>
</html>