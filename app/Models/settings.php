<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $table = 'setting';
    protected $fillable = ['dolar', 'euro'];
    use HasFactory;
}