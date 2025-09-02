<?php
class HomePage {
    private $title;

    public function __construct($title = "Home - Car Wash") {
        $this->title = $title;
    }

    // --- Header ---
    private function renderHeader() {
        return <<<HTML
        <header>
            <div class="logo">
                <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/541048493_759763299993588_5287248317119606726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGjLdhUiHYcxF9CWG2USm2lzNlzN3dmbanM2XM3d2ZtqUbpGyjhYEUtsZYmWyATRHhXdGWmZ_8k_iT1VLi4gN5H&_nc_ohc=9fK3_MuBOS4Q7kNvwF9_P4O&_nc_oc=AdmMqVoN31IkBPmCTQlDhR05KqL6f4VgJp1UNI9BUOYumzk5-JaRgrx4f55H6DXLd6s&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD3AF56HPcJZg4HcGmMFRvhHZAAhjhofCyR3gcN_ySeNkQuQ&oe=68DC5DCF" alt="Car Wash Logo">
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
        HTML;
    }

    // --- Carousel ---
    private function renderCarousel() {
        return <<<HTML
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://www.legendautoservices.com/wp-content/uploads/2023/11/Car-wash-al-quoz-best.jpeg" alt="Carwash Facility">
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

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        HTML;
    }

    // --- Info Section ---
    private function renderInfoSection() {
        return <<<HTML
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
        HTML;
    }

    // --- Footer ---
    private function renderFooter() {
        return <<<HTML
        <footer>
            <p>&copy; 2025 Car Wash. All Rights Reserved.</p>
            <p>Made with ❤️ in Leyte | <a href="about.php">Go to About Us</a></p>
        </footer>
        HTML;
    }

    // --- Full Page Renderer ---
    public function renderPage() {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$this->title}</title>

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="../styles/home_style.css"> <!-- external CSS -->
        </head>
        <body>
            {$this->renderHeader()}
            {$this->renderCarousel()}
            {$this->renderInfoSection()}
            {$this->renderFooter()}

            <!-- Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </body>
        </html>
        HTML;
    }
}

// Run page
$page = new HomePage();
$page->renderPage();
?>