<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <div class="container py-4">
    <h4 class="mb-4 text-center">User Directory</h4>

    @foreach($users as $user)
    <div class="card shadow-sm mb-3">
      <div class="card-body">
        <h5 class="card-title mb-1">{{ $user->name }}</h5>
        <p class="card-text mb-1"><strong>Email:</strong> {{ $user->email }}</p>
        <p class="card-text mb-1"><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
        <p class="card-text mb-1"><strong>City:</strong> {{ $user->city ?? 'N/A' }}</p>

        <div class="d-flex justify-content-between mt-3">
          <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline-info">View</a>
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Delete this user?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach

    {{-- Pagination (optional) --}}
    <div class="mt-4">
      {{ $users->links() }}
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
