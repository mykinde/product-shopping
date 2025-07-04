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
    <div class="card shadow-sm w-100" style="max-width: 600px;">
      <div class="card-body p-4">
        <h3 class="card-title text-center mb-4">Create Account</h3>

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" 
                     id="name" 
                     name="name" 
                     class="form-control @error('name') is-invalid @enderror" 
                     value="{{ old('name') }}" required autofocus>
              @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" 
                     id="email" 
                     name="email" 
                     class="form-control @error('email') is-invalid @enderror" 
                     value="{{ old('email') }}" required>
              @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" 
                     id="phone" 
                     name="phone" 
                     class="form-control @error('phone') is-invalid @enderror" 
                     value="{{ old('phone') }}" required>
              @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="company" class="form-label">Company</label>
              <input type="text" 
                     id="company" 
                     name="company" 
                     class="form-control @error('company') is-invalid @enderror" 
                     value="{{ old('company') }}">
              @error('company') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="city" class="form-label">City</label>
              <input type="text" 
                     id="city" 
                     name="city" 
                     class="form-control @error('city') is-invalid @enderror" 
                     value="{{ old('city') }}">
              @error('city') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" 
                     id="address" 
                     name="address" 
                     class="form-control @error('address') is-invalid @enderror" 
                     value="{{ old('address') }}">
              @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" 
                     id="password" 
                     name="password" 
                     class="form-control @error('password') is-invalid @enderror" 
                     required>
              @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="password_confirmation" class="form-label">Confirm Password</label>
              <input type="password" 
                     id="password_confirmation" 
                     name="password_confirmation" 
                     class="form-control" 
                     required>
            </div>
          </div>

          <div class="d-grid mt-3">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>

        <div class="text-center mt-3">
          <small>Already registered? <a href="{{ route('login') }}">Login</a></small>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
