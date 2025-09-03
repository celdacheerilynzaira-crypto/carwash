<?php
// ========================
// OOP Classes
// ========================

class Header {
    private $logo;
    private $navItems;

    public function __construct($logo, $navItems) {
        $this->logo = $logo;
        $this->navItems = $navItems;
    }

    public function render() {
        echo '<header>
                <div class="logo"><img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo"></div>
                <nav><ul>';
        foreach ($this->navItems as $name => $link) {
            $active = (basename($_SERVER['PHP_SELF']) == $link) ? "class='active'" : "";
            echo "<li $active><a href='$link'>$name</a></li>";
        }
        echo '  </ul></nav>
              </header>';
    }
}

class PricingCard {
    private $title;
    private $icon;
    private $price;
    private $features;
    private $color;
    private $highlight;

    public function __construct($title, $icon, $price, $features, $color, $highlight = false) {
        $this->title = $title;
        $this->icon = $icon;
        $this->price = $price;
        $this->features = $features;
        $this->color = $color;
        $this->highlight = $highlight;
    }

    public function render() {
        echo '<div class="col-sm-4">
                <div class="panel panel-default text-center">
                  <div class="panel-heading" style="background:' . $this->color . '; color:white;">
                    <h3><i class="fas ' . $this->icon . '"></i> ' . $this->title;
        if ($this->highlight) {
            echo ' <span class="badge-best">Best Deal</span>';
        }
        echo '</h3></div><div class="panel-body">
                <p><strong>₱' . $this->price . '</strong></p>';
        foreach ($this->features as $feature) {
            echo "<p>$feature</p>";
        }
        echo '</div>
              <div class="panel-footer"><a href="contact.php" class="btn btn-warning">Book Now</a></div>
              </div>
              </div>';
    }
}

class ServiceCard {
    private $icon;
    private $title;
    private $price;

    public function __construct($icon, $title, $price) {
        $this->icon = $icon;
        $this->title = $title;
        $this->price = $price;
    }

    public function render() {
        echo '<div class="service-card">
                <i class="fas ' . $this->icon . '"></i>
                <h3>' . $this->title . '</h3>
                <div class="price">₱' . $this->price . '</div>
              </div>';
    }
}

class FlipCard {
    private $title;
    private $price;
    private $desc;

    public function __construct($title, $price, $desc) {
        $this->title = $title;
        $this->price = $price;
        $this->desc = $desc;
    }

    public function render() {
        echo '<div class="flipcard-container">
                <div class="flipcard">
                  <div class="flipcard-front">
                    <h3>' . $this->title . '</h3>
                    <button class="btn btn-warning">₱' . $this->price . '</button>
                  </div>
                  <div class="flipcard-back">
                    <p>' . $this->desc . '</p>
                  </div>
                </div>
              </div>';
    }
}

class Footer {
    private $year;
    private $socials;

    public function __construct($socials) {
        $this->year = date("Y");
        $this->socials = $socials;
    }

    public function render() {
        echo '<footer>
                <p>&copy; ' . $this->year . ' Car Wash. All rights reserved.</p>
                <div class="social-icons">';
        foreach ($this->socials as $icon => $link) {
            echo "<a href='$link'><i class='fab fa-$icon'></i></a>";
        }
        echo '  </div>
              </footer>';
    }
}

// ========================
// Page Content
// ========================

$header = new Header(
    "https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg",
    [
        "Home" => "Home.php",
        "Services" => "Services.php",
        "Pricing" => "Pricing.php",
        "Contact" => "Contact.php",
        "About Us" => "About.php",
        "Login" => "../page/Authentication.php"
    ]
);

$packages = [
    new PricingCard("Basic Wash", "fa-car", 150, ["Exterior Wash", "Tire Cleaning", "Quick Dry"], "linear-gradient(to right,#d4a938,#f0c54f)"),
    new PricingCard("Premium Wash", "fa-gem", 300, ["Exterior & Interior Wash", "Vacuuming", "Wax Finish"], "linear-gradient(to right,#333,#555)", true),
    new PricingCard("VIP Package", "fa-crown", 500, ["Full Detailing", "Interior Deep Clean", "Free Air Freshener"], "linear-gradient(to right,#444,#666)")
];

$services = [
    new ServiceCard("fa-spray-can", "Exterior Wash", 200),
    new ServiceCard("fa-wind", "Interior Vacuum", 300),
    new ServiceCard("fa-car-side", "Tire Shine", 150)
];

$flipcards = [
    new FlipCard("Waxing", 500, "Protect your car’s paint and give it a long-lasting shine."),
    new FlipCard("Headlight Restoration", 450, "Improve visibility and make headlights look brand new.")
];

$footer = new Footer([
    "facebook-f" => "#",
    "instagram" => "#",
    "twitter" => "#"
]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash Services</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../styles/pricing_style.css"> <!-- keep your CSS in external file -->
</head>
<body>

<?php 
  $header->render(); 
?>

<main class="container pricing-section">
  <h2 class="section-title">Pricing & Packages</h2>
  <div class="row">
    <?php foreach ($packages as $pkg) { $pkg->render(); } ?>
  </div>

  <section class="additional-services">
    <h2 class="section-title">Additional Services</h2>
    <div class="service-row">
      <?php foreach ($services as $srv) { $srv->render(); } ?>
    </div>

    <div class="flipcard-row">
      <?php foreach ($flipcards as $fc) { $fc->render(); } ?>
    </div>
  </section>
</main>

<?php 
  $footer->render();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>