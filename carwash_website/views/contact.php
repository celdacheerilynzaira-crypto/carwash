<?php
    include '../classes/config.php';
    include '../page/ContactMessage.php';

    // ================== Handle Form Submission ==================
    $msg = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $db = new Config();
        $contactManager = new ContactMessage($db->conn);
    
        $name    = $_POST['name'] ?? '';
        $message = $_POST['message'] ?? '';
        $email   = $_POST['email'] ?? '';
        $contact = $_POST['contact_number'] ?? '';
    
        $msg = $contactManager->saveMessage($name, $message, $email, $contact);
    
        $db->conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/contact.css"> <!-- External CSS for styling -->
  <title>Contact Us - Car Wash</title>

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
    </div>
    <nav>
      <ul>
        <li><a href="../page/Home.php">Home</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="Pricing.php">Pricing</a></li>
        <li class="active"><a href="Contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="../page/Authentication.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <section class="contact-section">
      <!-- Info Panel -->
      <div class="contact-info-panel">
      <h2>Get in Touch</h2>
            <p><i class="fas fa-map-marker-alt"></i>6501 Carwash Street, Palo Leyte, Philippines</p>
            <p><i class="fas fa-phone"></i>+63 909 652 8736</p>
            <p><i class="fas fa-envelope"></i>info@carwash.com</p>
            <p><i class="fas fa-clock"></i>Mon - Sun: 8AM - 8PM</p>
            <hr>
            <h2>Contact Us (via)</h2>
            <p><i class="fas fa-envelope"></i>vannauries07@gmail.com</p>
            <p><i class="fas fa-phone"></i>+63 909 652 8736</p>
            <p><i class="fab fa-facebook-f"></i> Nibel Ungen Lid</p>
            <p><i class="fab fa-twitter"></i>nana85643</p>
            <p><i class="fas fa-clock"></i>Mon - Sun: 8AM - 8PM</p>
            <p>or</p>
            <p><i class="fas fa-envelope"></i>celda46@gmail.com</p>
            <p><i class="fas fa-phone"></i>+63 976 675 9845</p>
            <p><i class="fab fa-facebook-f"></i> Beyen Bargola </p>
            <p><i class="fab fa-twitter"></i>yen73546w273</p>
            <p><i class="fas fa-clock"></i>Mon - Sun: 8AM - 8PM</p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-panel">
      <?php if (!empty($msg)): ?>
      <p class="<?php echo (strpos($msg, 'successfully') !== false) ? 'success-msg' : 'error-msg'; ?>">
        <?php echo htmlspecialchars($msg); ?>
      </p>
    <?php endif; ?>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const msgBox = document.querySelector('.success-msg, .error-msg');
        if (msgBox) {
          setTimeout(() => {
            msgBox.style.display = 'none';
          }, 3000);
        }
      });
    </script>
        <h3>Send Us a Message</h3>
        <form action="" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Your full name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>

          <label for="contact_number">Phone Number:</label>
          <input type="tel" id="contact_number" name="contact_number" placeholder="09xx-xxx-xxxx">

          <label for="message">Message:</label>
          <textarea id="message" name="message" placeholder="Write your message..." required></textarea>

          <button type="submit" class="send-message-btn">📨 Send Message</button>
        </form>
      </div>
    </section>

    <!-- Map -->
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
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
    <p>Made with ❤️ in Leyte | <a href="services.php">Back to Home</a></p>
  </footer>

</body>
</html>