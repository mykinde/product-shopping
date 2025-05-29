<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Shopping - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body { background-color: #f8f9fa; }
        .card:hover { transform: scale(1.02); transition: all 0.3s ease-in-out; }
        .featured-section { background-color: #fff3cd; padding: 40px 0; }
        .category-title { margin-top: 40px; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">ModernShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#featured">Featured</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#cartModal" data-bs-toggle="modal">
                            Cart <span class="badge bg-danger" id="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search and Filters -->
    <div class="container my-4">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" id="search" class="form-control" placeholder="Search by product name or city...">
            </div>
            <div class="col-md-3">
                <select id="filterCategory" class="form-select">
                    <option value="">All Categories</option>
                </select>
            </div>
            <div class="col-md-3">
                <select id="filterCity" class="form-select">
                    <option value="">All Cities</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <section id="featured" class="featured-section">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row" id="featured-products">
                <!-- JS inserts cards here -->
            </div>
        </div>
    </section>

    <!-- Categorized Products -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="mb-4">All Products</h2>
            <div id="product-list">
                <!-- JS dynamically categorizes and adds products here -->
            </div>
        </div>
    </section>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Your Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="cart-items">
                    <!-- JS updates cart items here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/checkout" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Detail Modal -->
    <div class="modal fade" id="productDetailModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="productModalBody">
                    <!-- JS fills product detail -->
                </div>
            </div>
        </div>
    </div>

    <!-- JS Logic -->
    <script>
        const sampleProducts = [
            { id: 1, name: 'Red Shoes', price: 79.99, city: 'Lagos', category: 'Footwear', image: 'https://via.placeholder.com/150' },
            { id: 2, name: 'Blue Shirt', price: 45.00, city: 'Abuja', category: 'Apparel', image: 'https://via.placeholder.com/150' },
            { id: 3, name: 'Smartphone', price: 499.99, city: 'Kano', category: 'Electronics', image: 'https://via.placeholder.com/150' },
            { id: 4, name: 'Watch', price: 129.00, city: 'Ibadan', category: 'Accessories', image: 'https://via.placeholder.com/150' },
            { id: 5, name: 'Backpack', price: 59.00, city: 'Enugu', category: 'Bags', image: 'https://via.placeholder.com/150' },
            { id: 6, name: 'Sunglasses', price: 25.00, city: 'Lagos', category: 'Accessories', image: 'https://via.placeholder.com/150' }
        ];

        let cart = [];

        function renderProducts() {
            const categories = [...new Set(sampleProducts.map(p => p.category))];
            const cities = [...new Set(sampleProducts.map(p => p.city))];

            // Populate filters
            document.getElementById('filterCategory').innerHTML += categories.map(c => `<option value="${c}">${c}</option>`).join('');
            document.getElementById('filterCity').innerHTML += cities.map(c => `<option value="${c}">${c}</option>`).join('');

            // Render featured
            const featured = sampleProducts.slice(-5);
            document.getElementById('featured-products').innerHTML = featured.map(p => productCard(p)).join('');

            // Categorized list
            const grouped = categories.map(cat => {
                const items = sampleProducts.filter(p => p.category === cat);
                return `
                    <h4 class="category-title">${cat}</h4>
                    <div class="row g-3">${items.map(productCard).join('')}</div>
                `;
            }).join('');

            document.getElementById('product-list').innerHTML = grouped;
        }

        function productCard(product) {
            return `
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">₦${product.price.toFixed(2)} | ${product.city}</p>
                            <button class="btn btn-sm btn-outline-primary" onclick='showDetail(${JSON.stringify(product)})'>View</button>
                            <button class="btn btn-sm btn-primary ms-2" onclick='addToCart(${JSON.stringify(product)})'>Add</button>
                        </div>
                    </div>
                </div>`;
        }

        function showDetail(product) {
            document.getElementById('productModalTitle').innerText = product.name;
            document.getElementById('productModalBody').innerHTML = `
                <img src="${product.image}" class="img-fluid mb-3">
                <p>₦${product.price}</p>
                <p>City: ${product.city}</p>
                <p>Category: ${product.category}</p>
                <button class="btn btn-primary" onclick='addToCart(${JSON.stringify(product)})'>Add to Cart</button>
            `;
            const modal = new bootstrap.Modal(document.getElementById('productDetailModal'));
            modal.show();
        }

        function addToCart(product) {
            const exists = cart.find(item => item.id === product.id);
            if (exists) exists.quantity += 1;
            else cart.push({ ...product, quantity: 1 });
            updateCartUI();
        }

        function removeFromCart(productId) {
            cart = cart.filter(p => p.id !== productId);
            updateCartUI();
        }

        function updateCartUI() {
            const cartItems = cart.map(p => `
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div>
                        <strong>${p.name}</strong><br>
                        Qty: ${p.quantity} | ₦${(p.price * p.quantity).toFixed(2)}
                    </div>
                    <button class="btn btn-sm btn-danger" onclick="removeFromCart(${p.id})">Remove</button>
                </div>
            `).join('');

            document.getElementById('cart-items').innerHTML = cartItems || '<p class="text-center">Cart is empty.</p>';
            document.getElementById('cart-count').innerText = cart.reduce((sum, i) => sum + i.quantity, 0);
        }

        document.getElementById('search').addEventListener('input', function () {
            const val = this.value.toLowerCase();
            const results = sampleProducts.filter(p => p.name.toLowerCase().includes(val) || p.city.toLowerCase().includes(val));
            document.getElementById('product-list').innerHTML = `
                <h4 class="category-title">Search Results</h4>
                <div class="row g-3">${results.map(productCard).join('')}</div>
            `;
        });

        document.getElementById('filterCategory').addEventListener('change', function () {
            const val = this.value;
            const filtered = sampleProducts.filter(p => !val || p.category === val);
            document.getElementById('product-list').innerHTML = `
                <h4 class="category-title">${val || 'All Categories'}</h4>
                <div class="row g-3">${filtered.map(productCard).join('')}</div>
            `;
        });

        document.getElementById('filterCity').addEventListener('change', function () {
            const val = this.value;
            const filtered = sampleProducts.filter(p => !val || p.city === val);
            document.getElementById('product-list').innerHTML = `
                <h4 class="category-title">${val || 'All Cities'}</h4>
                <div class="row g-3">${filtered.map(productCard).join('')}</div>
            `;
        });

        renderProducts();
    </script>
</body>
</html>
