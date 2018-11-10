<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pasarbatik.homepage', [
            'products' => Product::with(['productimage', 'category', 'provider'])->get()
        ]);
    }

    public function getSingle($slug)
    {
        $product = Product::where('slug', $slug)->with(['productimage', 'category', 'provider'])->first();

        if($product){
            return view('pasarbatik.detailproduct', compact('product'));
        }
        return abort('404');
    }
}
