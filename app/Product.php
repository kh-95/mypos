<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
// use App\Category;

class Product extends Model
{
    use Translatable;


    protected $guarded = [];


    public $translatedAttributes = ['name','description'];

protected $appends=['image_path','profit_percent'];

public function category(){



    return $this->belongsto(Category::class);
}

public function getImagePathAttribute (){

    return asset('uploads/product_images/'. $this->image);
    
    }
    public function getProfitPercentAttribute (){

$profit = $this->sale_price - $this->purchase_price ;
$profit_percent= $profit * 100 / $this->purchase_price ;


return number_format($profit_percent,2) ;

    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');

    }//end of orders

    public function users()
    {
        return $this->belongsToMany(User::class,'carts');
    }
    

}
