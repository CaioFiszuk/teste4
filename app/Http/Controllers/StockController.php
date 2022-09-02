<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PDOException;

class StockController extends Controller
{
    /**
     * Insere dados no banco de dados do estoque
     * @return void
     */
    public function addProduct(Request $request)
    {
        try
        {
            $product = new Product();
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = number_format($request->input('price'), 2);
            $product->quantity = $request->input('quantity');
            $product->category_id = $request->input('category');
            $product->save();
            return redirect()->route('stock');
        }
        catch(PDOException $e)
        {
          echo $e->getMessage();
        }

    }

    /**
     * Exclui registro do banco de dados
     * @return void
     */
    public function deleteProduct($id)
    {
      $product = Product::destroy($id);
      return redirect()->route('stock');
      
    }

    /**
     * Abre a página de edição de dados
     * @return void
     */
   public function updatePage($id)
   {
      $product = Product::find($id);
      return view('admin.update_page', compact('product'));
   } 

   /**
    * Altera o dado do produto no banco de dados
    * @return void
    */
   public function updateProduct(Request $request)
   {
    try
    {
        $the_id = $request->input('the_id');
        $product = Product::find($the_id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category');
        $product->save();
        return redirect()->route('stock');
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
   } 

   /**
    * Realiza a busca de produtos específicos para o administrador
    * @return void
    */
    public function search(Request $request)
    {
      $q = $request->input('q');
      $products = Product::where("name", "like", "%$q%")->orWhere("description", "like", "%$q%")->get();

      return view('admin.stock', compact('products'));
    }
}
