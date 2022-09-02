<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Cart;

class Product extends Model
{
   protected $table = 'products';

   protected $primaryKey = 'id';

   public function category()
   {
    return $this->belongsTo(Category::class);
   }

   public function carts()
   {
      return $this->hasMany(Cart::class);
   }

}
