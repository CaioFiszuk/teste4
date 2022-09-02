<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function stock()
    {
       if(Gate::denies('access-admin'))
       {
        abort('403');
       }

        $products = Product::paginate(20);

        return view('admin.stock', compact('products'));
    }
}