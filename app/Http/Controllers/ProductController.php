<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{

    public function all()
{
    $products = Product::with('category')->latest()->paginate(10);
    return view('products.all', compact('products'));
}



   public function index(Request $request)
{
    $query = Product::with('user', 'category')->where('user_id', auth()->id());

    if ($search = $request->search) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%")
              ->orWhereHas('user', function ($q2) use ($search) {
                  $q2->where('city', 'LIKE', "%$search%");
              });
        });
    }

    if ($category = $request->category) {
        $query->where('category_id', $category);
    }

    if ($city = $request->city) {
        $query->whereHas('user', function ($q) use ($city) {
            $q->where('city', $city);
        });
    }

    $products = $query->latest()->get();
    $categories = Category::all();
    $cities = User::distinct()->pluck('city');

    return view('products.index', compact('products', 'categories', 'cities'));
}





    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $data = $request->only(['name', 'price', 'description', 'category_id', 'quantity']);
        $data['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Product created.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
       // $categories = Category::all();
         abort_unless($product->user_id === auth()->id(), 403);
    $categories = Category::all();
    return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $data = $request->only(['name', 'price', 'description', 'category_id', 'quantity']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted.');
    }
}
