@extends('layouts.toolbar')

@section('content')
<div class="container py-4">
    
    <div class="row justify-content-center">
        <div class="col-12">

            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">All Products</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-circle"></i> Add Product
                    </a>
                </div>

                <div class="card-body">
                    @if($products->count())
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price (₦)</th>
                                        <th>Qty</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $index => $product)
                                        <tr>
                                            <td>{{ $products->firstItem() + $index }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>
                                                @if($product->image)
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Image" class="img-thumbnail" style="height: 50px;">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-secondary">
                                                    <i class="bi bi-pencil"></i> VIEW
                                                </a>
                                                
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline"
                                                    onsubmit="return confirm('Are you sure to delete this product?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    @else
                        <p class="text-center text-muted">No products found.</p>
                    @endif
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
