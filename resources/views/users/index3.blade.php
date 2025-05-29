@extends('layouts.toolbar')

@section('title', 'User Directory')

@section('content')

  <div class="container py-4">
     <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0">User Directory</h4>
      <a href="{{ route('users.create') }}" class="btn btn-success">+ Add New User</a>
    </div>
  
   
      
    @foreach($users as $user)
    <div class="card shadow-sm mb-3">
      <div class="card-body">
        <h5 class="card-title mb-1">{{ $user->name }}</h5>
        <p class="card-text mb-1"><strong>Email:</strong> {{ $user->email }}</p>
        <p class="card-text mb-1"><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
        <p class="card-text mb-3"><strong>City:</strong> {{ $user->city ?? 'N/A' }}</p>

        <div class="d-grid gap-2">
          <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-info btn-sm">View</a>
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Delete this user?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger btn-sm">Delete</button>
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
