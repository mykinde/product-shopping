<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Responsive Product Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html { font-size: 16px; }
        @media (max-width: 576px) {
            html { font-size: 14px; }
        }
        .product-card {
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>
<div class="container py-4">
    <div class="row g-2 mb-3">
        <div class="col-12 col-md-4">
            <input type="text" id="search" class="form-control" placeholder="Search by name or description">
        </div>
        <div class="col-12 col-md-4">
            <select id="filterCategory" class="form-select">
                <option value="">Filter by Category</option>
            </select>
        </div>
        <div class="col-12 col-md-4">
            <select id="filterCity" class="form-select">
                <option value="">Filter by City</option>
            </select>
        </div>
    </div>
    <div id="productList"></div>
</div>

<!-- Product Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="productDetails"></div>
        </div>
    </div>
</div>

<script>
    const products = [
        { id: 1, name: 'Product A', category: 'Electronics', price: 15000, city: 'Lagos', description: 'A high-quality electronic product' },
        { id: 2, name: 'Product B', category: 'Fashion', price: 7500, city: 'Abuja', description: 'Stylish and comfortable fashion wear' },
        { id: 3, name: 'Product C', category: 'Home Appliances', price: 22000, city: 'Kano', description: 'Efficient and durable home appliance' },
        { id: 4, name: 'Product D', category: 'Fashion', price: 6000, city: 'Lagos', description: 'Trendy fashion accessory' },
        { id: 5, name: 'Product E', category: 'Electronics', price: 30000, city: 'Port Harcourt', description: 'Latest model electronics device' },
        { id: 6, name: 'Product F', category: 'Home Appliances', price: 18500, city: 'Abuja', description: 'Modern kitchen appliance' },
    ];

    const productList = document.getElementById('productList');
    const filterCategory = document.getElementById('filterCategory');
    const filterCity = document.getElementById('filterCity');
    const searchInput = document.getElementById('search');

    const categories = [...new Set(products.map(p => p.category))];
    categories.forEach(cat => {
        const option = document.createElement('option');
        option.value = cat;
        option.textContent = cat;
        filterCategory.appendChild(option);
    });

    const cities = [...new Set(products.map(p => p.city))];
    cities.forEach(city => {
        const option = document.createElement('option');
        option.value = city;
        option.textContent = city;
        filterCity.appendChild(option);
    });

    function displayProducts() {
        const selectedCategory = filterCategory.value;
        const selectedCity = filterCity.value;
        const searchTerm = searchInput.value.toLowerCase();
        const groupedProducts = {};

        const filteredProducts = products.filter(product => {
            return (!selectedCategory || product.category === selectedCategory) &&
                (!selectedCity || product.city === selectedCity) &&
                (product.name.toLowerCase().includes(searchTerm) || product.description.toLowerCase().includes(searchTerm));
        });

        filteredProducts.forEach(product => {
            if (!groupedProducts[product.category]) {
                groupedProducts[product.category] = [];
            }
            groupedProducts[product.category].push(product);
        });

        productList.innerHTML = '';

        for (const cat in groupedProducts) {
            const section = document.createElement('section');
            section.className = 'mb-4';
            const title = document.createElement('h4');
            title.className = 'category-title mb-3';
            title.textContent = cat;
            section.appendChild(title);

            const row = document.createElement('div');
            row.className = 'row g-3';

            groupedProducts[cat].forEach(product => {
                const col = document.createElement('div');
                col.className = 'col-6 col-md-3';

                const card = document.createElement('div');
                card.className = 'card h-100 product-card';
                card.innerHTML = `
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="mb-1">₦${product.price.toFixed(2)} | ${product.city}</p>
                        <p class="text-muted small mb-3">${product.description}</p>
                        <button class="btn btn-sm btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal" data-id="${product.id}">
                            View Details
                        </button>
                    </div>
                `;
                col.appendChild(card);
                row.appendChild(col);
            });

            section.appendChild(row);
            productList.appendChild(section);
        }
    }

    filterCategory.addEventListener('change', displayProducts);
    filterCity.addEventListener('change', displayProducts);
    searchInput.addEventListener('input', displayProducts);

    document.getElementById('productModal').addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const productId = parseInt(button.getAttribute('data-id'));
        const product = products.find(p => p.id === productId);
        const productDetails = document.getElementById('productDetails');
        productDetails.innerHTML = `
            <h5>${product.name}</h5>
            <p><strong>Category:</strong> ${product.category}</p>
            <p><strong>Price:</strong> ₦${product.price.toFixed(2)}</p>
            <p><strong>City:</strong> ${product.city}</p>
            <p>${product.description}</p>
        `;
    });

    window.addEventListener('DOMContentLoaded', displayProducts);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
