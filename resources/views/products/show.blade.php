@extends('layouts.toolbar')

@section('content')
<div class="container py-4">

    {{-- Secondary Navigation 
@include('products.partials.nav')
--}}
    {{-- Product Details Card --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                @else
                    <img src="https://via.placeholder.com/600x300?text=No+Image" class="card-img-top" alt="No image">
                @endif

                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>

                    <p class="card-text"><strong>Description:</strong> {{ $product->description ?? 'No description provided.' }}</p>

                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Price:</strong> ₦{{ number_format($product->price, 2) }}</li>
                        <li class="list-group-item"><strong>Quantity:</strong> {{ $product->quantity }}</li>
                        <li class="list-group-item"><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>City:</strong> {{ $product->user->city ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>Posted By:</strong> {{ $product->user->name }}</li>
                    </ul>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to My Products
                        </a>
                        <div>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-warning me-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
