<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm w-100" style="max-width: 400px;">
      <div class="card-body p-4">
        <h3 class="card-title text-center mb-4">Login</h3>

        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input 
              type="email" 
              class="form-control @error('email') is-invalid @enderror" 
              id="email" 
              name="email" 
              value="{{ old('email') }}" 
              required 
              autofocus>
            @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
              type="password" 
              class="form-control @error('password') is-invalid @enderror" 
              id="password" 
              name="password" 
              required>
            @error('password')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3 form-check d-flex justify-content-between">
            <div>
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <a href="{{ route('password.request') }}" class="small text-decoration-none">Forgot Password?</a>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>

        <div class="text-center mt-3">
          <small>Don't have an account? <a href="{{ route('register') }}">Register</a></small>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
