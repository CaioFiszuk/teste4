<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Acesso à página do carrinho de compras
     * @return void
     */
    public function index(Request $request)
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('cart', compact('carts'));
    }

    /**
     * Adiciona item específico ao carrinho de compras
     * @return void
     */
    public function addToCart(Request $request, $id)
    {

      $carts = new Cart();

      $carts->user_id = auth()->id();
      $carts->product_id = settype($id, "int");
      $carts->save();

       return redirect()->route('cart.index');
    }
    
}