<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm w-100" style="max-width: 450px;">
      <div class="card-body p-4">
        <h3 class="card-title text-center mb-4">Create Account</h3>

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input 
              type="text" 
              class="form-control @error('name') is-invalid @enderror" 
              id="name" 
              name="name" 
              value="{{ old('name') }}" 
              required 
              autofocus>
            @error('name') 
              <span class="invalid-feedback">{{ $message }}</span> 
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input 
              type="email" 
              class="form-control @error('email') is-invalid @enderror" 
              id="email" 
              name="email" 
              value="{{ old('email') }}" 
              required>
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

          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input 
              type="password" 
              class="form-control" 
              id="password_confirmation" 
              name="password_confirmation" 
              required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>

        <div class="text-center mt-3">
          <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
