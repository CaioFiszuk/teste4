<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
   protected $table = 'categories';

   protected $primaryKey = 'id';

   public function products()
   {
    return $this->hasMany(Products::class);
   }
}
