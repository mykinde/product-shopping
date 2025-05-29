@extends('layouts.toolbar')

@section('title', 'Dashboard')

@section('content')

    

    <div class="container mt-4">
        <h2 class="mb-4">Dashboard</h2>

        <div class="row">
            {{-- Admin Panels --}}
            @if(auth()->user()->role === 'admin')
                <div class="col-md-4 mb-3">
                    <div class="card text-bg-primary animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <h5 class="card-title">Manage Users</h5>
                            <p class="card-text">View and manage all users in the system.</p>
                            <a href="{{ route('users.index') }}" class="btn btn-light">Users</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card text-bg-success animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="card-body">
                            <h5 class="card-title">Manage Categories</h5>
                            <p class="card-text">Create or edit product categories.</p>
                            <a href="{{ route('categories.index') }}" class="btn btn-light">Categories</a>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Common Panels --}}
            <div class="col-md-4 mb-3">
                <div class="card text-bg-info animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="card-body">
                        <h5 class="card-title">My Products</h5>
                        <p class="card-text">View and manage your own product listings.</p>
                        <a href="{{ route('products.index') }}" class="btn btn-light">Products</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card text-bg-warning animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="card-body">
                        <h5 class="card-title">My Cart</h5>
                        <p class="card-text">View and manage products in your cart.</p>
                        <a href="{{ route('cart.index') }}" class="btn btn-light">Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card text-bg-dark animate__animated animate__fadeInUp animate__delay-4s">
                    <div class="card-body">
                        <h5 class="card-title">My Orders</h5>
                        <p class="card-text">Track your past and current orders.</p>
                        <a href="{{ route('orders.index') }}" class="btn btn-light">Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
