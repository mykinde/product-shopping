
<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand" href="#">App</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products</a></li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index') }}">
                    Cart (<span id="cart-count">{{ session('cart_count', 0) }}</span>)
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}">Orders</a></li>
        
            
         
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="d-flex">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
