<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    protected $table = 'shopping';
    protected $fillable = ['product_id', 'user_id','order_number','order_quantity','price'];
    
}
