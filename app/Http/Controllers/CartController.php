<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        return view('cart.index', compact('cartItems'));
    }

    public function store2(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            ['quantity' => \DB::raw("quantity + {$request->quantity}")]
        );

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    Cart::updateOrCreate(
        ['user_id' => auth()->id(), 'product_id' => $validated['product_id']],
        ['quantity' => DB::raw('quantity + ' . $validated['quantity'])]
    );

    return response()->json(['success' => true]);
}

    public function destroy(Cart $cart)
    {
        if ($cart->user_id != Auth::id()) abort(403);
        $cart->delete();
        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
