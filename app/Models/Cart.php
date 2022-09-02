<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class Cart extends Model
{
    public function product()
    {
       return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(Order::class);
    }
}
