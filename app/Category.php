<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
// use App\Product;

class Category extends Model
{
    // use Astrotomic\Translatable\Translatable;
    use Translatable;

    protected $guarded = [
      
    ];

    public $translatedAttributes = ['name'];



    public function products(){


        return $this->hasMany(Product::class);
    }

}
