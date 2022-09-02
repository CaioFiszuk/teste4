<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use NumberFormatter;

class ProductController extends Controller
{
    /**
     * lorem
     * @return void
     */
    public function agulhas()
    {
        $products = Product::where('category_id', '1')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function colas()
    {
        $products = Product::where('category_id', '7')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function estiletes()
    {
        $products = Product::where('category_id', '9')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function fitasAdesivas()
    {
        $products = Product::where('category_id', '12')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function cadernos()
    {
        $products = Product::where('category_id', '4')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function apontadores()
    {
        $products = Product::where('category_id', '2')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function borrachas()
    {
        $products = Product::where('category_id', '3')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function estojos()
    {
        $products = Product::where('category_id', '10')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function ficharios()
    {
        $products = Product::where('category_id', '11')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function tesouras()
    {
        $products = Product::where('category_id', '23')->get();
        return view('product', compact('products'));
    }


    /**
     * lorem
     * @return void
     */
    public function carimbos()
    {
        $products = Product::where('category_id', '6')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function envelopes()
    {
        $products = Product::where('category_id', '8')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function postIts()
    {
        $products = Product::where('category_id', '20')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function sulfites()
    {
        $products = Product::where('category_id', '22')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function pastas()
    {
        $products = Product::where('category_id', '15')->paginate(10);
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function pranchetas()
    {
        $products = Product::where('category_id', '21')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function pilhas()
    {
        $products = Product::where('category_id', '19')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function canetas()
    {
        $products = Product::where('category_id', '5')->get();
        return view('product', compact('products'));
    }


    /**
     * lorem
     * @return void
     */
    public function marcadoresDeTexto()
    {
        $products = Product::where('category_id', '14')->get();
        return view('product', compact('products'));
    }


    /**
     * lorem
     * @return void
     */
    public function gizes()
    {
        $products = Product::where('category_id', '13')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function papelCarvao()
    {
        $products = Product::where('category_id', '16')->get();
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function papelCouche()
    {
        $products = Product::where('category_id', '17')->get();
        
        return view('product', compact('products'));
    }

    /**
     * lorem
     * @return void
     */
    public function papelJornal()
    {
        $products = Product::where('category_id', '18')->get();
        return view('product', compact('products'));
    }

    /**
     * Realiza a busca de produtos específicos para o cliente
     * @return void
     */
    public function search(Request $request)
    {
        $q = $request->input('q');
        $products = Product::where("name", "like", "%$q%")->orWhere("description", "like", "%$q%")->get();
  
        return view('product', compact('products'));
    }

}