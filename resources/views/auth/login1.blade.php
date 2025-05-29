@extends('layouts.apps')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Login</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autofocus>
                            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" required>
                            @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>

                        {{-- Remember Me --}}
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        {{-- Submit Button --}}
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        {{-- Forgot Password --}}
                        @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="text-decoration-none" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                        @endif

                        {{-- Register Link --}}
                        @if (Route::has('register'))
                        <div class="text-center mt-3">
                            <small>
                                Don't have an account? <a href="{{ route('register') }}">Register here</a>
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
