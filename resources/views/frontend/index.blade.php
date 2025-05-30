<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySite - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        .btn-glow {
            box-shadow: 0 0 10px #ffffff88;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">MySite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-2" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Animation -->
    <section class="hero">
        <div class="container">
            <h1 class="display-3 fw-bold" data-aos="fade-down" data-aos-duration="1000">
                Welcome to MySite
            </h1>
            <p class="lead mt-3" data-aos="fade-up" data-aos-delay="300">
                Your trusted solution for modern web applications and user experience.
            </p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-4 btn-glow" data-aos="zoom-in" data-aos-delay="600">
                Get Started
            </a>
        </div>
    </section>

<!-- Product/Services Showcase Section -->
<section id="products" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4" data-aos="fade-up">Our Products & Services</h2>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
            We deliver top-notch solutions tailored to your needs.
        </p>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-laptop display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Custom websites and web apps that are fast, secure, and scalable.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-phone display-4 text-success mb-3"></i>
                        <h5 class="card-title">Mobile Apps</h5>
                        <p class="card-text">Cross-platform mobile applications that engage and perform.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-bar-chart-line display-4 text-warning mb-3"></i>
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">SEO, social media, and ads that boost your brand visibility and sales.</p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-cloud-check display-4 text-info mb-3"></i>
                        <h5 class="card-title">Cloud Solutions</h5>
                        <p class="card-text">Deploy and manage your applications in the cloud for reliability and scale.</p>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-lock display-4 text-danger mb-3"></i>
                        <h5 class="card-title">Cybersecurity</h5>
                        <p class="card-text">Protect your systems and data with our enterprise-grade security services.</p>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="700">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-people display-4 text-secondary mb-3"></i>
                        <h5 class="card-title">Consulting & Training</h5>
                        <p class="card-text">Get expert advice and training to empower your team and grow your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4" data-aos="fade-up">Why Choose Us</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="200">
                    <i class="bi bi-speedometer2 display-4 text-primary"></i>
                    <h5 class="mt-3">Fast</h5>
                    <p>Lightning-fast performance for smooth user experience.</p>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-shield-lock display-4 text-primary"></i>
                    <h5 class="mt-3">Secure</h5>
                    <p>Top-level security for data and transactions.</p>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-delay="400">
                    <i class="bi bi-person-check display-4 text-primary"></i>
                    <h5 class="mt-3">User-Friendly</h5>
                    <p>Clean, intuitive UI that anyone can use easily.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text-center" data-aos="fade-up">
            <h2 class="mb-3">Contact Us</h2>
            <p>Have questions? Email us at <strong>support@mysite.com</strong></p>
        </div>
    </section>

    <!-- Footer -->
  <!-- Footer Section -->
<footer class="bg-dark text-light pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-3">YourCompany</h5>
                <p>
                    We build quality web and mobile solutions that drive business growth. Contact us today.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#hero" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="#products" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="#about" class="text-light text-decoration-none">About Us</a></li>
                    <li><a href="#contact" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-3">Contact</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill me-2"></i>123 Main Street, Lagos, Nigeria</li>
                    <li><i class="bi bi-envelope-fill me-2"></i>info@yourcompany.com</li>
                    <li><i class="bi bi-phone-fill me-2"></i>+234 801 234 5678</li>
                </ul>

                <!-- Social Links -->
                <div class="mt-3">
                    <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-secondary mt-4">
        <div class="text-center">
            <p class="mb-0">&copy; {{ date('Y') }} YourCompany. All rights reserved.</p>
        </div>
    </div>
</footer>

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
   
    <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- AOS for Animations -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
