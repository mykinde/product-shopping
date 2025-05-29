<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $exception->getStatusCode() }} | Error</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  @php
    $status = $exception->getStatusCode();
    $titles = [
      400 => 'Bad Request',
      401 => 'Unauthorized',
      403 => 'Access Denied',
      404 => 'Page Not Found',
      405 => 'Method Not Allowed',
      419 => 'Page Expired',
      422 => 'Validation Error',
      429 => 'Too Many Requests',
      500 => 'Server Error',
      503 => 'Service Unavailable'
    ];
    $messages = [
      400 => 'The server could not understand your request.',
      401 => 'You must be logged in to access this page.',
      403 => 'You do not have permission to view this page.',
      404 => 'The page you are looking for could not be found.',
      405 => 'The HTTP method is not allowed for this route.',
      419 => 'Your session has expired. Please refresh and try again.',
      422 => 'There was a validation error with your request.',
      429 => 'You are making too many requests in a short time.',
      500 => 'Something went wrong on the server.',
      503 => 'The service is temporarily unavailable. Please try again later.'
    ];
    $title = $titles[$status] ?? 'Unknown Error';
    $message = $messages[$status] ?? 'An unexpected error has occurred.';
  @endphp

  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm text-center w-100" style="max-width: 500px;">
      <div class="card-body p-4">
        <h1 class="display-5 text-danger mb-3">{{ $status }}</h1>
        <h4 class="mb-2">{{ $title }}</h4>
        <p class="text-muted">{{ $message }}</p>

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
