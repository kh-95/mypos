<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Cart extends Pivot
{
    protected $guarded = [];


    protected $table = 'carts';  


    protected $fillable = [
    'user_id', 'product_id', 'count','total_price'
]; 



}
