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
        return view('frontend.landing');
    } public function about() {
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
