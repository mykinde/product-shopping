<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Auth;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items')->where('user_id', Auth::id())->latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string'
        ]);

        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Cart is empty.');
        }

        DB::beginTransaction();
        try {
            $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

            $order = Order::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'total' => $total,
            ]);

            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_name' => $item->product->name,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ]);
            }

            Cart::where('user_id', Auth::id())->delete();
            DB::commit();
            return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Order failed. Try again.');
        }
    }
}
