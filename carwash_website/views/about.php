<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Car Wash</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: white; /* background */
    }

    /* --- Header & Navigation --- */
    header {
      background-color: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      max-height: 60px;
      width: 70px;       /* make it square */
      height: 50px;      /* keep same as width */
      border-radius: 50%; /* makes it circular */
      object-fit: cover;  /* ensures image fits inside circle */
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

    section {
      background-color: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      text-align: center;
    }

    .main-photo {
      width: 100%;
      height: auto;
      max-width: 600px;
      margin-bottom: 20px;
      border-radius: 8px;
    }

    /* --- Story Box --- */
    .story-box {
      background-color: #f9f9f9;
      padding: 15px;
      margin: 15px auto;
      border-radius: 6px;
      box-shadow: 12, 56, 67, 12;
      max-width: 800px;
      text-align: left;
    }

    .team-members,
    .facility-photos {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 15px;
    }

    .team-member-card {
      text-align: center;
      max-width: 200px;
    }

    .team-member-card img {
      border-radius: 50%;
      margin-bottom: 10px;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }

    hr {
      border: 0;
      height: 1px;
      background: #ccc;
      margin: 40px 0;
    }

    /* --- Footer --- */
    footer {
      background-color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="pricing.php">Pricing</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li class="active"><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="about-us-banner">
      <h1>About Our Car Wash</h1>
    </section>

    <section class="about-content">
      <div class="story-section">
        <img src="https://www.goodsight.com.au/wp-content/uploads/2022/08/car-wash-installation-parkes-1d.jpg" alt="Car wash facility" class="main-photo">
        <h2>Our Story</h2>

        <div class="story-box">
          <p>We started our journey with a mission to provide eco-friendly and high-quality car wash services. Our values focus on customer satisfaction, reliability, and innovation.</p>
        </div>

        <div class="story-box">
          <p>Our philosophy is simple: if we wouldn’t be proud to drive it, it’s not done yet. Each car is treated with attention to detail, from the wheels to the windshield. Our team is trained not only in the latest cleaning techniques but also in customer service, ensuring every visit is worth your time.</p>
        </div>

        <div class="story-box">
          <p>Our journey began with a simple idea: every car deserves care, and every customer deserves respect. From our very first wash, we committed to providing a service that goes beyond cleaning — we aim to create a positive experience. Over the years, we’ve built strong relationships with our customers by listening to their needs, maintaining consistent quality, and always delivering with a smile.</p>
        </div>

        <div class="story-box">
          <p>At the heart of our car wash is a commitment to the environment. We introduced water-saving technologies and eco-friendly cleaning products that minimize waste without compromising results. Every wash you choose with us helps conserve water and reduce harmful chemical use, making your clean car part of a cleaner future.</p>
        </div>

        <div class="story-box">
          <p>What started as a small neighborhood car wash has grown into a trusted brand in the community. Our success is built on the support of our loyal customers and the dedication of our hardworking team. We continue to innovate and expand our services, but we never lose sight of our roots — being a friendly, reliable, and affordable car wash that feels like family.</p>
        </div>

        <div class="story-box">
          <p>We’re not just washing cars — we’re building a brand that represents quality, trust, and sustainability. As we look ahead, we aim to introduce more advanced technologies, expand our services, and continue leading the way in eco-friendly car care. Our vision is to set a new standard for car wash services in the industry.</p>
        </div>
      </div>

      <hr>

      <div class="team-section">
        <h2>Meet the Team</h2>
        <div class="team-members">
          <div class="team-member-card">
            <img src="https://cdn.pixabay.com/photo/2023/02/07/10/49/ai-generated-7773820_1280.jpg" alt="Team Member 1">
            <h3>Beyen Bargola</h3>
            <p>Founder & CEO</p>
          </div>
          <div class="team-member-card">
            <img src="https://cdn.pixabay.com/photo/2023/01/22/11/49/girl-7736189_1280.jpg" alt="Team Member 2">
            <h3>Jovanna Petito</h3>
            <p>Operations Manager</p>
          </div>
        </div>
      </div>

      <hr>

      <div class="facility-section">
        <h2>Our Facility</h2>
        <div class="facility-photos">
          <img src="https://gophoenixclean.com/wp-content/uploads/Car-Wash-Cleaning.jpg" alt="Car wash bay">
          <img src="https://rightlook.com/wp-content/uploads/2022/07/rightlook_supplies_equipment_callout_hero.png" alt="Cleaning equipment">
        </div>
        <p>Our facility is equipped with the latest technology to ensure your vehicle gets the best care possible.</p>
        <p>From advanced cleaning systems to professional-grade tools, our facility is designed to deliver a spotless finish every time.</p>
        <p>Our state-of-the-art facility combines modern equipment with eco-friendly practices, giving your car the care it deserves.</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
  </footer>

</body>
</html>