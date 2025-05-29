@extends('layouts.toolbar')

@section('title', 'Dashboard')

@section('content')


<div class="container py-4">


    <div class="mb-4">
    <ul class="nav nav-pills gap-2">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.all') }}" class="nav-link {{ request()->routeIs('products.all') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i> All Products
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}">
                <i class="bi bi-person-lines-fill"></i> My Products
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.create') }}" class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}">
                <i class="bi bi-plus-circle"></i> Add Product
            </a>
        </li>
    </ul>
</div>



  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
    <h4 class="mb-0">Product Directory</h4>

    <form method="GET" action="{{ route('products.index') }}" class="d-flex flex-grow-1 flex-md-grow-0 gap-2">
      <input type="text" name="search" class="form-control" placeholder="Search by name or city" value="{{ request('search') }}">
      <button type="submit" class="btn btn-outline-secondary">
        <i class="bi bi-search"></i>
      </button>
    </form>

    <a href="{{ route('products.create') }}" class="btn btn-primary">
      <i class="bi bi-plus-lg"></i> Add Product
    </a>
  </div>

  {{-- Filter Row --}}
  <form method="GET" action="{{ route('products.index') }}" class="row g-2 mb-4">
    <div class="col-md-4">
      <select name="category" class="form-select">
        <option value="">Filter by Category</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <select name="city" class="form-select">
        <option value="">Filter by City</option>
        @foreach($cities as $city)
          <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>
            {{ $city }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4 d-grid">
      <button type="submit" class="btn btn-outline-secondary">
        <i class="bi bi-funnel"></i> Apply Filters
      </button>
    </div>
  </form>

  @if($products->isEmpty())
    <div class="alert alert-info">No products found.</div>
  @else
    <div class="row">
      @foreach($products as $product)
        <div class="col-md-6 col-lg-4 mb-4 animate__animated animate__fadeInUp">
          <div class="card h-100 shadow-sm">
            @if($product->image)
              <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            @else
              <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No image">
            @endif

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text mb-1"><strong>Price:</strong> ₦{{ number_format($product->price, 2) }}</p>
              <p class="card-text mb-1"><strong>City:</strong> {{ $product->user->city }}</p>
              <p class="card-text mb-1"><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</p>
              <p class="card-text mb-3"><strong>Posted:</strong> {{ $product->created_at->format('d M, Y') }}</p>

              <div class="mt-auto d-flex justify-content-between">
                <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                  <i class="bi bi-eye"></i> View
                </a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-warning btn-sm">
                  <i class="bi bi-pencil"></i> Edit
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel{{ $product->id }}">{{ $product->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}" class="img-fluid" alt="{{ $product->name }}">
                  </div>
                  <div class="col-md-6">
                    <p><strong>Price:</strong> ₦{{ number_format($product->price, 2) }}</p>
                    <p><strong>City:</strong> {{ $product->user->city }}</p>
                    <p><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <form action="{{ url('cart.add', $product->id) }}" method="POST" class="mt-3">
                      @csrf
                      <div class="input-group">
                        <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}" class="form-control" style="max-width: 100px;">
                        <button type="submit" class="btn btn-success">
                          <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- End Modal --}}
      @endforeach
    </div>

    <div class="mt-4">
      {{-- $products->links() --}}
    </div>
  @endif

</div>

@endsection

