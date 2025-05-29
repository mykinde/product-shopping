@extends('layout')
@section('content')
<h2>{{ $product->name }}</h2>
<p>{{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>
<p>Category: {{ $product->category->name ?? 'None' }}</p>
<form method="POST" action="{{ route('cart.store') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit">Add to Cart</button>
</form>
@endsection
