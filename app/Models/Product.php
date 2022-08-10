<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'category_id','logo','skufield'];
    
    use HasFactory;

    public function orderdetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
