@extends('layouts.toolbar')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Product</h5>
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Products
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Product Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Price --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">Price (₦) <span class="text-danger">*</span></label>
                            <input type="number" name="price" class="form-control" step="0.01" min="0" value="{{ old('price') }}" required>
                            @error('price')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Quantity --}}
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Available Quantity <span class="text-danger">*</span></label>
                            <input type="number" name="quantity" class="form-control" min="1" value="{{ old('quantity') }}" required>
                            @error('quantity')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-select" required>
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle"></i> Save Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
