<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>419 | Page Expired</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm text-center w-100" style="max-width: 500px;">
      <div class="card-body p-4">
        <h1 class="display-5 text-warning mb-3">419</h1>
        <h4 class="mb-2">Page Expired</h4>
        <p class="text-muted">
          Your session has expired or the page has been inactive for too long.
        </p>

        <div class="d-grid mt-4">
          <a href="{{ url()->previous() }}" class="btn btn-outline-secondary mb-2">Go Back</a>
          <a href="{{ url('/') }}" class="btn btn-outline-primary">Back to Home</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
