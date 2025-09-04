<?php
// ==================== Base Component Class ====================
abstract class Component {
    abstract public function render();
}

// ==================== Header ====================
class Header extends Component {
    public function render() {
        return '
        <header>
            <div class="logo">
                <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li class="active"><a href="Services.php">Services</a></li>
                    <li><a href="Pricing.php">Pricing</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="../page/Authentication.php">Login</a></li>
                </ul>
            </nav>
        </header>';
    }
}

// ==================== Hero ====================
class Hero extends Component {
    public function render() {
        return '
        <section class="hero">
            <div class="hero-content">
                <h1>Shine Like New</h1>
                <p>Premium Car Wash & Detailing Services</p>
                <button class="btn"><a href="about.php">Learn More</a></button>
            </div>
        </section>';
    }
}

// ==================== Pricing ====================
class Pricing extends Component {
    private $packages = [
        ["Basic Wash", "Exterior Wash", "$15"],
        ["Premium Wash", "Exterior + Interior", "$30"],
        ["Detailing", "Deep Cleaning & Wax", "$60"]
    ];

    public function render() {
        $rows = "";
        foreach ($this->packages as $p) {
            $rows .= "<tr>
                        <td>{$p[0]}</td>
                        <td>{$p[1]}</td>
                        <td>{$p[2]}</td>
                        <td><a href='contact.php' class='btn btn-warning'>Book Now</a></td>
                      </tr>";
        }

        return "
        <section class='section pricing'>
            <h2>Our Packages</h2>
            <table>
                <tr>
                    <th>Package</th>
                    <th>Features</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                $rows
            </table>
        </section>";
    }
}

// ==================== Testimonials ====================
class Testimonials extends Component {
    private $reviews = [
        ["Best car wash in town! My car looks brand new every time.", "⭐⭐⭐⭐⭐", "Juan D."],
        ["Amazing service! My car looks brand new!", "⭐⭐⭐⭐⭐", "Maria S."],
        ["Fast, friendly, and affordable. Highly recommend!", "⭐⭐⭐⭐", "Carlo P."]
    ];

    public function render() {
        $items = "";
        foreach ($this->reviews as $r) {
            $items .= "
            <div class='review'>
                <p>\"{$r[0]}\"</p>
                <div class='stars'>{$r[1]}</div>
                <small>- {$r[2]}</small>
            </div>";
        }

        return "
        <section class='section testimonials'>
            <h2>Client Feedback</h2>
            $items
        </section>";
    }
}

// ==================== Gallery ====================
class Gallery extends Component {
    private $images = [
        ["https://www.shutterstock.com/image-photo/dirty-white-car-clean-headlight-260nw-1536849521.jpg", "Before Wash"],
        ["https://tse1.mm.bing.net/th/id/OIP.YLvwNBbkv4kWmIQ4c4qiGQHaEK?pid=Api&h=220&P=0", "After Wash"],
        ["https://www.goodsight.com.au/wp-content/uploads/2022/08/car-wash-installation-parkes-1d.jpg", "Car Wash Facility"]
    ];

    public function render() {
        $imgs = "";
        foreach ($this->images as $img) {
            $imgs .= "<img src='{$img[0]}' alt='{$img[1]}'>";
        }

        return "
        <section class='section gallery-section'>
            <h2>Gallery</h2>
            <div class='gallery'>$imgs</div>
        </section>";
    }
}

// ==================== Why Choose Us ====================
class WhyChooseUs extends Component {
    private $points = [
        "✔ Eco-friendly products",
        "✔ Experienced staff",
        "✔ Convenient location",
        "✔ Affordable prices"
    ];

    public function render() {
        $list = "";
        foreach ($this->points as $p) {
            $list .= "<li>$p</li>";
        }

        return "
        <section class='section why-choose'>
            <h2>Why Choose Us?</h2>
            <ul>$list</ul>
        </section>";
    }
}

// ==================== Footer ====================
class Footer extends Component {
    public function render() {
        return '
        <footer>
            <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
            <p>Made with ❤️ in Leyte | <a href="home.php">Back to Home</a></p>
        </footer>';
    }
}

// ==================== Page Assembly ====================
class Page {
    private $components = [];

    public function addComponent(Component $component) {
        $this->components[] = $component;
    }

    public function render() {
        foreach ($this->components as $c) {
            echo $c->render();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/service_style.css">
  <title>Car Wash Services</title>
</head>
<body>
<?php
$page = new Page();
$page->addComponent(new Header());
$page->addComponent(new Hero());
$page->addComponent(new Pricing());
$page->addComponent(new Testimonials());
$page->addComponent(new Gallery());
$page->addComponent(new WhyChooseUs());
$page->addComponent(new Footer());

$page->render();
?>
</body>
</html>