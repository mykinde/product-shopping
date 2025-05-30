<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;


class FrontendController extends Controller
{
    public function landing()
{
    //$featuredProducts = Product::where('is_featured', true)->take(8)->get();  
	// return view('frontend.landing',	compact('featuredProducts'));
	 $products = Product::with('category')->latest()->paginate(10);

    return view('frontend.landing', compact('products'));
}
    
    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function terms() {
        return view('pages.terms');
    }

    public function privacy() {
        return view('pages.privacy');
    }

    public function faq() {
        return view('pages.faq');
    }

    public function services() {
        return view('pages.services');
    }




}
