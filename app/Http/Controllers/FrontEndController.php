<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //Displaying Product in Front Page
    public function index()
    {

        return view('index', ['products' => Product::paginate(3)]);
    }

    public  function singleProduct($id)
    {
       $products = Product::find($id);
       return view('single', compact('products'));
    }
}
