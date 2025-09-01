<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Car Wash</title>
    <link rel="stylesheet" href="styles.css">
</head>
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

    .contact-section {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    .contact-info-panel,
    .contact-form-panel {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        flex: 1;
    }

    .contact-form-panel form {
        display: flex;
        flex-direction: column;
    }

    .contact-form-panel label,
    .contact-form-panel input,
    .contact-form-panel textarea {
        margin-bottom: 10px;
    }

    .contact-form-panel input,
    .contact-form-panel textarea {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: calc(100% - 18px); /* Adjusting for padding and border */
    }

    .send-message-btn {
        background-color: #ffb6c1; /* Light pink color */
        color: #333;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        align-self: flex-start;
        margin-top: 10px;
    }

    .contact-details {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .map-container {
        margin-top: 15px;
    }

    /* --- Footer --- */
    footer {
        background-color: #fff;
        padding: 20px;
        text-align: center;
    }
</style>
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
        <li class="active"><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>
    <main>
        <section class="contact-section">
            <div class="contact-info-panel">
                <h2>Contact Us</h2>
                <p>short DESC</p>
            </div>
            <div class="contact-form-panel">
                <h3>Contact Form:</h3>
                <form action="#">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone">
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea>
                    
                    <button type="submit" class="send-message-btn">Send Message (btn)</button>
                </form>
            </div>
        </section>

        <section class="contact-details">
            <h3>Contact Information:</h3>
            <p>Physical address with a map (Google Maps embed).</p>
            <p>Phone number.</p>
            <p>Email address.</p>
            <p>Operating hours.</p>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.210452331776!2d144.96538961567117!3d-37.8172901797517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af5851410b%3A0xa1937f3743c33d0!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1617196016654!5m2!1sen!2sau" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>

    <footer>
        <p>Footer</p>
    </footer>

</body>
</html>