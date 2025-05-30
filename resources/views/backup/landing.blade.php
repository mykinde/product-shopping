<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySite - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
            color: white;
            padding: 100px 0;
        }
        .feature-icon {
            font-size: 40px;
            color: #0d6efd;
        }
        .testimonial {
            font-style: italic;
        }
        footer {
            background-color: #f8f9fa;
            padding: 30px 0;
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
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4">Welcome to MySite</h1>
            <p class="lead">Your trusted solution for [your service/product description]</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Our Features</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mb-3"><i class="bi bi-lightning-fill"></i></div>
                    <h5>Fast Performance</h5>
                    <p>Experience lightning-fast load times and optimized code performance.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mb-3"><i class="bi bi-shield-lock-fill"></i></div>
                    <h5>Secure</h5>
                    <p>Your data is safe with our robust security protocols and encryption.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mb-3"><i class="bi bi-stars"></i></div>
                    <h5>Easy to Use</h5>
                    <p>Intuitive interfaces make it easy for anyone to navigate and use.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <blockquote class="testimonial">
                        "This platform changed my business!"
                    </blockquote>
                    <cite>– John D.</cite>
                </div>
                <div class="col-md-4">
                    <blockquote class="testimonial">
                        "Simple, efficient, and secure. Highly recommended."
                    </blockquote>
                    <cite>– Sarah W.</cite>
                </div>
                <div class="col-md-4">
                    <blockquote class="testimonial">
                        "Customer service is top-notch. I’m impressed."
                    </blockquote>
                    <cite>– Mike A.</cite>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Get in Touch</h2>
            <p>Email: support@mysite.com | Phone: +123 456 7890</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} MySite. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons (Optional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
