@extends('layouts.apps')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Full Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autofocus>
                                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required>
                                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Phone</label>
                            <div class="col-md-6">
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required>
                                @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-form-label text-md-end">Company</label>
                            <div class="col-md-6">
                                <input id="company" type="text"
                                    class="form-control @error('company') is-invalid @enderror"
                                    name="company" value="{{ old('company') }}">
                                @error('company') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">City</label>
                            <div class="col-md-6">
                                <input id="city" type="text"
                                    class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ old('city') }}" required>
                                @error('city') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>
                            <div class="col-md-6">
                                <textarea id="address" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    rows="2">{{ old('address') }}</textarea>
                                @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required>
                                @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                    class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 offset-md-4 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>


                         {{-- Register Link --}}
                        @if (Route::has('login'))
                        <div class="text-center mt-3">
                            <small>
                                Already with an account? <a href="{{ route('login') }}">Login here</a>
                            </small>
                        </div>
                        @endif


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
