<!-- resources/views/errors/custom-error.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Error</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm text-center w-100" style="max-width: 500px;">
      <div class="card-body p-4">
        <h1 class="display-4 text-danger mb-3">Oops!</h1>
        <h4 class="mb-3">Something went wrong</h4>
        <p class="text-muted">
          @isset($message)
            {{ $message }}
          @else
            We’re sorry, but an unexpected error has occurred.
          @endisset
        </p>

        <div class="d-grid mt-4">
          <a href="{{ url('/') }}" class="btn btn-outline-primary">Back to Home</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
