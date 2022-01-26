<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $products = Product::all();
        /* this is creating a variable $products saying it is equal to all() in the model `product`
        the all() is basically returning new self of the model product. The products => products on 
        the second line means first'products is the name on the view i.e array name, second is the
        variable above'*/
        return view('landing', ['products' => $products]); 
    }
}
