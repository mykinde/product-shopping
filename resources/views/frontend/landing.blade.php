<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile First Shopping Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-card img { height: 200px; object-fit: cover; }
    .cart-badge { position: absolute; top: 0; right: 0; transform: translate(50%, -50%); }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">ShopEase</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/welcome">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="/landing">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="/login">Sellers</a></li>
           <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        </ul>
        <button class="btn btn-warning position-relative" onclick="viewCart()">
          Cart <span class="badge bg-danger cart-badge" id="cartCount">0</span>
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="bg-light p-5 text-center">
    <h1>Welcome to ShopEase</h1>
    <p class="lead">Your one-stop shop for amazing deals!</p>
    <a href="#products" class="btn btn-primary btn-lg">Shop Now</a>
  </div>

  <!-- Product Grid -->
  <section class="container my-5" id="products">
    <div class="row" id="productList">
      <!-- JS generated content -->
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-dark text-white p-4" id="contact">
    <div class="container">
      <h5>Contact Us</h5>
      <p>Email: support@shopease.com | Phone: +234-123-456-7890</p>
      <div class="mt-3">
        <a href="#" class="text-white me-2">Facebook</a>
        <a href="#" class="text-white me-2">Twitter</a>
        <a href="#" class="text-white">Instagram</a>
      </div>
    </div>
  </section>

  <script>
    const products = [
      { id: 1, name: 'Wireless Earbuds', price: 15000, img: 'https://i.imgur.com/50eJv7A.png' },
      { id: 2, name: 'Smart Watch', price: 25000, img: 'https://i.imgur.com/50eJv7A.png' },
      { id: 3, name: 'Bluetooth Speaker', price: 18000, img: 'https://i.imgur.com/50eJv7A.png' },
      { id: 4, name: 'Fitness Tracker', price: 12000, img: 'https://i.imgur.com/50eJv7A.png' }
    ];

    function renderProducts() {
      const container = document.getElementById('productList');
      products.forEach(p => {
        container.innerHTML += `
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card product-card">
              <img src="${p.img}" class="card-img-top" alt="${p.name}">
              <div class="card-body">
                <h5 class="card-title">${p.name}</h5>
                <p class="card-text">₦${p.price.toLocaleString()}</p>
                <button class="btn btn-success w-100" onclick='addToCart(${p.id})'>Add to Cart</button>
              </div>
            </div>
          </div>`;
      });
    }

    function addToCart(productId) {
      const cart = JSON.parse(localStorage.getItem('cart') || '[]');
      const existing = cart.find(item => item.id === productId);
      if (existing) {
        existing.qty += 1;
      } else {
        const product = products.find(p => p.id === productId);
        cart.push({ ...product, qty: 1 });
      }
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCount();
    }

    function updateCartCount() {
      const cart = JSON.parse(localStorage.getItem('cart') || '[]');
      const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
      document.getElementById('cartCount').innerText = totalItems;
    }

    function viewCart() {
      alert('Cart feature coming soon!'); // Replace with modal or redirect
    }

    renderProducts();
    updateCartCount();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
