<?php
// --- Page Class ---
class Page {
    private $title;
    private $sections = [];

    public function __construct($title) {
        $this->title = $title;
    }

    public function addSection($section) {
        $this->sections[] = $section;
    }

    private function renderHeader() {
        return '
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>' . $this->title . '</title>
          <link rel="stylesheet" href="../styles/about_style.css">
        </head>
        <body>
          <header>
            <div class="logo">
              <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
            </div>
            <nav>
              <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="Pricing.php">Pricing</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li class="active"><a href="About.php">About Us</a></li>
                <li><a href="../page/Authentication.php">Login</a></li>
              </ul>
            </nav>
          </header>
          <main>
        ';
    }

    private function renderFooter() {
        return '
          </main>
          <footer>
            <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
            <p>Made with ❤️ in Leyte | <a href="home.php">Back to Home</a></p>
          </footer>
        </body>
        </html>';
    }

    public function render() {
        echo $this->renderHeader();
        foreach ($this->sections as $section) {
            echo $section->render();
        }
        echo $this->renderFooter();
    }
}

// --- Section Class ---
class Section {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function render() {
        return "
        <section>
          <h2>{$this->title}</h2>
          {$this->content}
        </section>";
    }
}

// --- Create About Us Page ---
$page = new Page("About Us - Car Wash");

// Add Story Section
$storyContent = '
  <img src="https://www.goodsight.com.au/wp-content/uploads/2022/08/car-wash-installation-parkes-1d.jpg" alt="Car wash facility" class="main-photo">
  <div class="story-box"><p>We started our journey with a mission to provide eco-friendly and high-quality car wash services.</p></div>
  <div class="story-box"><p>Our philosophy is simple: if we wouldn’t be proud to drive it, it’s not done yet...</p></div>
  <div class="story-box"><p>Our journey began with a simple idea: every car deserves care, and every customer deserves respect...</p></div>
';
$page->addSection(new Section("Our Story", $storyContent));

// Add Team Section
$teamContent = '
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
';
$page->addSection(new Section("Meet the Team", $teamContent));

// Add Facility Section
$facilityContent = '
  <div class="facility-photos">
    <img src="https://gophoenixclean.com/wp-content/uploads/Car-Wash-Cleaning.jpg" alt="Car wash bay">
    <img src="https://rightlook.com/wp-content/uploads/2022/07/rightlook_supplies_equipment_callout_hero.png" alt="Cleaning equipment">
  </div>
  <p>Our facility is equipped with the latest technology to ensure your vehicle gets the best care possible.</p>
';
$page->addSection(new Section("Our Facility", $facilityContent));

// Render Page
$page->render();