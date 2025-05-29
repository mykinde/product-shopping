@extends('layout')
@section('content')
<h2>Your Cart</h2>
@foreach($cartItems as $item)
    <p>{{ $item->product->name }} x {{ $item->quantity }} - ${{ $item->product->price * $item->quantity }}</p>
    <form method="POST" action="{{ route('cart.destroy', $item) }}">
        @csrf @method('DELETE')
        <button type="submit">Remove</button>
    </form>
@endforeach
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <input name="name" placeholder="Your Name" required>
    <input name="phone" placeholder="Phone" required>
    <input name="address" placeholder="Address" required>
    <input name="city" placeholder="City" required>
    <button type="submit">Checkout</button>
</form>
@endsection
