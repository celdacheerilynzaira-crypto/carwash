<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/contact.css"> <!-- External CSS for styling -->
  <title>Contact Us - Car Wash</title>

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
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
        <li><a href="pricing.php">Pricing</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <section class="contact-section">
      <!-- Info Panel -->
      <div class="contact-info-panel">
        <h2>Get in Touch</h2>
        <p><i class="fas fa-map-marker-alt"></i> 6501 Carwash Street, Palo Leyte , Philippines</p>
        <p><i class="fas fa-phone"></i> +63 909 652 8736</p>
        <p><i class="fas fa-envelope"></i> info@carwash.com</p>
        <p><i class="fas fa-clock"></i> Mon - Sun: 8AM - 8PM</p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-panel">
        <h3>Send Us a Message</h3>
        <form action="#">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Your full name">

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="you@example.com">

          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" placeholder="09xx-xxx-xxxx">

          <label for="message">Message:</label>
          <textarea id="message" name="message" placeholder="Write your message..."></textarea>

          <button type="submit" class="send-message-btn">📨 Send Message</button>
        </form>
      </div>
    </section>

    <div class="map-container">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31307.505197212827!2d124.971!3d11.1585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3307d866894e412b%3A0xc082c3e9eed24333!2sPalo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1693600000000!5m2!1sen!2sph" 
    width="100%" 
    height="300" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
    <p>Made with ❤️ in Leyte | <a href="services.php">Back to Home</a></p>
  </footer>

</body>
</html>