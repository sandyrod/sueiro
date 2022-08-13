<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestmodel extends Model
{
    use HasFactory;
    protected $table = 'budgetrequests';
    protected $fillable = ['name', 'email', 'phone', 'product_id','company','company_id', 'extradata', 'company'];
}
