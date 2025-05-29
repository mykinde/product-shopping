

@extends('layout')
@section('content')

<h2>Products</h2>

<form method="GET" class="row g-2 mb-3">
    <div class="col-md-4">
        <input name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name or city">
    </div>
    <div class="col-md-3">
        <select name="category_id" class="form-select">
            <option value="">All Categories</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected(request('category_id') == $cat->id)>{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <input name="city" value="{{ request('city') }}" class="form-control" placeholder="City">
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary w-100" type="submit">Filter</button>
    </div>
</form>

<div class="row">
    @foreach($products as $product)
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">${{ $product->price }}</p>
                    <p class="card-text text-muted">City: {{ $product->user->city }}</p>
                </div>
                <button class="btn btn-sm btn-success mt-2 add-to-cart-btn" 
                        data-id="{{ $product->id }}" 
                        data-name="{{ $product->name }}" 
                        data-price="{{ $product->price }}">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>




<h2>My Products</h2>
<a href="{{ route('products.create') }}">Create New Product</a>
<ul>
    @foreach($products as $product)
        <li>
            {{ $product->name }} - ${{ $product->price }}
            <a href="{{ route('products.show', $product) }}">View</a>
            <a href="{{ route('products.edit', $product) }}">Edit</a>
        </li>
    @endforeach
</ul>


@endsection

@section('scripts')
<script>
$('.add-to-cart-btn').on('click', function () {
    const id = $(this).data('id');
    $.post('/cart', {
        _token: '{{ csrf_token() }}',
        product_id: id,
        quantity: 1
    }, function (res) {
        alert('Product added to cart!');
    }).fail(function () {
        alert('Error adding to cart.');
    });
});
</script>
@endsection
