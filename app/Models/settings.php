<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'setting';
    protected $fillable = ['dolar', 'euro','costo_referencia', 'activacion'];
    use HasFactory;
}
